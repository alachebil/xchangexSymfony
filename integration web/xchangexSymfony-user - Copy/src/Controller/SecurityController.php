<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\ForgetType;
use App\Service\TwilioService;
use App\Form\ForgetPasswordType;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;
use Symfony\Component\Mailer\Mailer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Egulias\EmailValidator\Result\InvalidEmail;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\session;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Doctrine\Persistence\ManagerRegistry;



class SecurityController extends AbstractController
{

    private $managerRegistry;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }

    public function sendEmail(MailerInterface $mailer, String $emailTo )
    {
        $email = (new Email())
            ->from('khalilbenmzaker@gmail.com')
            ->to($emailTo)
            ->subject('Connection')
            ->text('vous vous etes connecté sur notre site si ce n est pas vous veuillez changez votre mot de passe');
            
        

        $mailer->send($email);

        

        return new Response("Success");
    }
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils,Request $request, MailerInterface $mailer): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
            
       // get the login error if there is one
       $error = $authenticationUtils->getLastAuthenticationError();
       // last username entered by the user
       $lastUsername = $authenticationUtils->getLastUsername();
       

       // Get the entity manager for the User class using the ManagerRegistry object
       $entityManager = $this->managerRegistry->getManagerForClass(User::class);

       // Pass the ManagerRegistry object to the UserRepository constructor instead of the EntityManager object
       $userRepository = new UserRepository($this->managerRegistry);


       // Use the returned user object for whatever you need to do in your method
       
       $user = $userRepository->findOneByEmail($lastUsername);

       
       $session = $request->getSession();
       $session->set('user', $user);
      
        

        

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername,
        'error' => $error,
        'session' => $session,]);


       
       
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): Response
    {
        //  dd("logouttttt");
        // $token = '';

        // Set the cookie's expiration date to a past date
        //setcookie('token', $token, time() - 3600, '/');
        // dd('logout');
        //throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
        return $this->redirectToRoute('app_login');
    }
}
