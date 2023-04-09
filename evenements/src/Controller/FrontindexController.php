<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontindexController extends AbstractController
{
    #[Route('/frontindex', name: 'app_frontindex')]
    public function index(): Response
    {
        return $this->render('frontindex/index.html.twig', [
            'controller_name' => 'FrontindexController',
        ]);
    }
}
