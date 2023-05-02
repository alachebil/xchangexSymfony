<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ForgetType;
use App\Service\TwilioService;
use App\Form\ForgetPasswordType;
use App\Repository\UserRepository;
use Symfony\Component\Mailer\Mailer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Egulias\EmailValidator\Result\InvalidEmail;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ForgotPasswordController extends AbstractController
{
    
      #[Route('/forgot-password-sms', name:'forgot_password_sms')]
    
    public function index(Request $request, TwilioService $twilio, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, UserRepository $userRepository)
    {
        $user = new User();
        //dd($request);
        $form = $this->createForm(ForgetPasswordType::class, $user);
        //dd($form);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            // Get the email address of the user requesting the password reset

            $email = $form->get('email')->getData();

            // Find the user with the specified email address
            $user = $userRepository->findOneByEmail($email);

            if (!$user) {
                $this->addFlash('alert', 'InvalidEmail');
                return $this->redirectToRoute('forgot_password');
            } else {
                // Generate and save a unique password reset token for this user
                // Generate and save a unique rdom_bytes(32));
                $resetToken = bin2hex(random_bytes(3));
                //  dd($resetToken);
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $resetToken

                    )
                );

                $message = 'Your password reset code is: ' . $resetToken;
                $twilio->sendSms($user->getNumTel(), $message);
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Password reset SMS sent!');
                // Redirect the user back to the login page
                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('security/forgot.html.twig', [
            'forgotForm' => $form->createView(),
        ]);
    }

    
    
    

    
    
     #[Route('/oubli-mot-de-passe', name:'app_reset_password', methods:'GET|POST')]
     
    public function forgottenPassword(Request $request, UserPasswordEncoderInterface $encoder, MailerInterface $mailer, TokenGeneratorInterface $tokenGenerator, UserRepository $userRepository ): Response
    {
      $form = this->createForm(forgetpasswordtype::class);
      $form ->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){

        $donnees = $form->getData();
        $user=$userRepository->findOneBy(['email'=>$donnees]);
        if(!$user){this->addFlash('danger','cette adresse n existe pas');
        return $this->redirectToRoute("forgot.html.twig");
        }

        $token = $tokenGenerator->generateToken();

        try{ $user->setToken($token);
            $entityManager= $this->getDoctrine()->getManager();
            $entityManager= persist($user);
            $entityManager->flush();




        }catch(\exception $exception)
        {
            this->addFlash('warning','une erreur est survenue:'.$exception->getMessage());
            return $this->redirectToRoute("app_login");

        }

        $url= $this->generateUrl('app_reset_password',array('token'=>$token),UrlGeneratorInterface::ABSOLUTE_URL);

        $message= (new message('mot de passe oublié')) 
            ->from('khalilbenmzaker@gmail.com')
            ->to($user.getEmail())
            ->subject('Code verification')
            ->text('votre code est terma');
            
        

        $mailer->send($message);


      }
      return $this->redirectToRoute("security/forgot.html.twig",['form'=>$form->createView()]);

            
    }

    #[Route(path: '/oubli-mot-de-passe', name: 'app_reset_password')]
    public function motdepasseoublie(): RedirectResponse
    {
        // Do some logic to determine the redirect URL
        $redirectUrl = $this->generateUrl('app_login');
    
        // Create a new instance of the RedirectResponse class
        $redirectResponse = new RedirectResponse($redirectUrl);
    
        // Return the RedirectResponse object
        return $redirectResponse;
    }
    



 
        

    public function sendEmail(MailerInterface $mailer, String $emailTo)
    {
        $email = (new Email())
            ->from('khalilbenmzaker@gmail.com')
            ->to($emailTo)
            ->subject('Code verification')
            ->text('votre code est terma');
            
        

        $mailer->send($email);

        

        return new Response("Success");
    }
 

    
}
