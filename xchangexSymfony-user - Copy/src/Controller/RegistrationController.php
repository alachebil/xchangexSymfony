<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\LoginAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Mime\Email;


class RegistrationController extends AbstractController
{

    /*public function sendEmail(MailerInterface $mailer, String $emailTo)
    {
        $email = (new Email())
            ->from('khalilbenmzaker@gmail.com')
            ->to($emailTo)
            ->subject('Bienvenue')
            ->text('Vous avez Crée un compte sur la platforme xchangex');
            
        

        $mailer->send($email);

        return new Response("Success");
    }*/
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $user = new User();
        //dd($request);
        $form = $this->createForm(RegistrationFormType::class, $user);
        //dd($form);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            // dd($form->get('password'));
            // dd($form->get('password'));
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $rolle = $form->get('rolle')->getData();

            $user->setRoles([$rolle]);
            $user->setIsVerified(false);
            $user->setIsBanned(false);
            $entityManager->persist($user);
            $entityManager->flush();
           /* sendEmail($mailer,"mohamedkhalil.benmzaker@esprit.tn");*/
            // do anything else you need here, like send an email
            $email = (new Email())
            ->from('khalilbenmzaker@gmail.com')
            ->to($user->getEmail())
            ->subject('Creation Compte Xchangex')
            ->text('bienvenue dans notre platforme on vous souhaite une agreable experience');
        
        $mailer->send($email);
            //redirect to login
            //   $token = '';

            // Set the cookie's expiration date to a past date
            //   setcookie('token', $token, time() - 3600, '/');
            return $this->redirectToRoute('app_logout');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

   

}
