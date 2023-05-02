<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Entity\User;
use App\Form\UpdateType;
use App\Form\User\UserType;
use App\Form\User\LoginType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(UserRepository $userRepository): Response
    {
        $data = $userRepository->getClientsByCountry();
        // dd($data);
        return $this->render('Admin/index.html.twig', [

            'results' => $data,
        ]);
    }
}
