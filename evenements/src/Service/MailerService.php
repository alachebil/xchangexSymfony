<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class MailerService
{
    
    private $mailer;
    
    
    public function __construct( MailerInterface $mailer)
     {
        
        $this->mailer=$mailer;
     }
    
    public function sendEmail(    $to , $nom , $nomEvent /*,$dateEvent*/ ): void
    {
        
        $email = (new Email())
            ->from('alaa.chebil2000@gmail.com')
            ->to($to)
            ->subject('Ado-Doc')
            ->text( $nom.'  Votre Participation est bien validé à evenement  ' .$nomEvent/*. ' dans la date '.$dateEvent*/);
             
            $this->mailer->send($email);
      
        // ...
    }
}



