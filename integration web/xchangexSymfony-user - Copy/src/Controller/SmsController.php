<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twilio\Rest\Client;

class SmsController extends AbstractController
{
    public function sendSms()
    {
        $sid = 'ACda8a095f2e33a437b224a4367ec7c448';
        $token = '67553f0c06fda15e3f9cfb15369d113e';
        $client = new Client($sid, $token);

        $message = $client->messages->create(
            "+21626733139",
            [
                'from' => "+15076088948",
                'body' => 'Réclamation traitée'
            ]
        );
    }
}
