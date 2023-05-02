<?php

namespace App\Controller;

use App\Entity\Livreur;
use App\Form\LivreurType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/livreur')]
class LivreurController extends AbstractController
{
    #[Route('/', name: 'app_livreur_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $livreurs = $entityManager
            ->getRepository(Livreur::class)
            ->findAll();

        return $this->render('livreur/index.html.twig', [
            'livreurs' => $livreurs,
        ]);
    }

    #[Route('/new', name: 'app_livreur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $livreur = new Livreur();
        $form = $this->createForm(LivreurType::class, $livreur);
        $form->handleRequest($request);
        $response =new  Response();

        if ($form->isSubmitted() && $form->isValid()) {
            $response = $this->forward('App\Controller\SmsController::sendSms');

            $entityManager->persist($livreur);
            $entityManager->flush();

            return $this->redirectToRoute('app_livreur_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('livreur/new.html.twig', [
            
            'livreur' => $livreur,
            'form' => $form,
            // dd('sms_response' => $response->getContent());
            'sms_response' => $response->getContent(),
            
        ]);
        return $this->renderForm('livreur/new.html.twig', [
            'livreur' => $livreur,
            'form' => $form,
            'sms_response' => false
        ]);
    }

    #[Route('/{idLivr}', name: 'app_livreur_show', methods: ['GET'])]
    public function show(Livreur $livreur): Response
    {
        return $this->render('livreur/show.html.twig', [
            'livreur' => $livreur,
        ]);
    }

    #[Route('/{idLivr}/edit', name: 'app_livreur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Livreur $livreur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LivreurType::class, $livreur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_livreur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('livreur/edit.html.twig', [
            'livreur' => $livreur,
            'form' => $form,
        ]);
    }

    #[Route('/{idLivr}', name: 'app_livreur_delete', methods: ['POST'])]
    public function delete(Request $request, Livreur $livreur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livreur->getIdLivr(), $request->request->get('_token'))) {
            $entityManager->remove($livreur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_livreur_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/show_in_map/{idLivr}', name: 'app_Livreur_map', methods: ['GET'])]
    public function Map( Livreur $idLivr,EntityManagerInterface $entityManager ): Response
    {

        $Livreur = $entityManager
            ->getRepository(Livreur::class)->findBy( 
                ['idLivr'=>$idLivr ]
            );
        return $this->render('livreur/api_arcgis.html.twig', [
            'livreur' => $Livreur,
        ]);
    }
}
