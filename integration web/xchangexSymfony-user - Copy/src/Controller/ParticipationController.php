<?php

namespace App\Controller;

use App\Entity\Participation;
use App\Form\ParticipationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenement;
use App\Entity\User;
use App\Service\MailerService;

#[Route('/participation')]
class ParticipationController extends AbstractController
{
    
    #[Route('{id}/new', name: 'app_participation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,Evenement $id,MailerService $mailer): Response
    {
        $participation = new Participation();
        $participation->setEvenement($id);
        $id->setNbParticipants($id->getNbParticipants()-1);
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);
    

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($participation);
            $id_user=$participation->getUser();
            $client = $entityManager->getRepository(User::class)->find($id_user);
            $to= $client->getEmail();
            $nom= $client->getNom();
            $nomEvent=$id->getNomEvent();
            //$dateEvent=$id->getDate();
        $mailer->sendEmail($to,$nom,$nomEvent/*,$dateEvent*/);
            
            $entityManager->flush();
            $this->addFlash('success', 'Votre participation de l\'événement '.$id->getNomEvent().' a été enregistrée avec succès!');
            

            return $this->redirectToRoute('app_evenement_indexFront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/new.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }


    #[Route('/', name: 'app_participation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $participations = $entityManager
            ->getRepository(Participation::class)
            ->findAll();

        return $this->render('participation/index.html.twig', [
            'participations' => $participations,
        ]);
    }


    
    #[Route('/newback', name: 'app_participation_newback', methods: ['GET', 'POST'])]
    public function newback(Request $request, EntityManagerInterface $entityManager): Response
    {
        $participation = new Participation();
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($participation);
            $entityManager->flush();

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/newback.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_participation_show', methods: ['GET'])]
    public function show(Participation $participation): Response
    {
        return $this->render('participation/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_participation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participation $participation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/edit.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_participation_delete', methods: ['POST'])]
    public function delete(Request $request, Participation $participation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($participation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
    }
}
