<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class MailerServiceL
{
    
    private $mailer;
    
    
    public function __construct( MailerInterface $mailer)
     {
        
        $this->mailer=$mailer;
     }
    
    public function sendEmail(    $to,$subject,$html ): void
    {
        
        $email = (new Email())
            ->from('tekayasyrine8@gmail.com')
            ->to($to)
            ->subject($subject)
            ->html($html);
             
            $this->mailer->send($email);
      
        // ...
    }
}