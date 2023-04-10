<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/service')]
class ServiceController extends AbstractController
{
    #[Route('/', name: 'app_service_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $services = $entityManager
            ->getRepository(Service::class)
            ->findAll();

        return $this->render('service/index.html.twig', [
            'services' => $services,
        ]);
    }

    #[Route('/new', name: 'app_service_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $type = $service->getTypeService();
            $titre = $service->getTitreService();
            $description = $service->getDescriptionService();
            $lieu = $service->getLieuService();
            $maxLength = 10;

            if (strlen($type) > $maxLength || strlen($titre) > $maxLength || strlen($description) > $maxLength || strlen($lieu) > $maxLength) {
                $this->addFlash('error', 'La longueur maximale autorisée est de '.$maxLength.' caracterisé pour les champs Type, Titre, Description et Lieu.');
                return $this->redirectToRoute('app_service_new');
            }

            $entityManager->persist($service);
            $entityManager->flush();

            return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('service/new.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{idService}', name: 'app_service_show', methods: ['GET'])]
    public function show(Service $service): Response
    {
        return $this->render('service/show.html.twig', [
            'service' => $service,
        ]);
    }

    #[Route('/{idService}/edit', name: 'app_service_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Service $service, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $type = $service->getTypeService();
            $titre = $service->getTitreService();
            $description = $service->getDescriptionService();
            $lieu = $service->getLieuService();
            $maxLength = 10;

            if (strlen($type) > $maxLength || strlen($titre) > $maxLength || strlen($description) > $maxLength || strlen($lieu) > $maxLength) {
                $this->addFlash('error', 'La longueur maximale autorisée est de '.$maxLength.' caractères pour les champs Type, Titre, Description et Lieu.');
                return $this->redirectToRoute('app_service_edit', ['idService' => $service->getIdService()]);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('service/edit.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{idService}', name: 'app_service_delete', methods: ['POST'])]
    public function delete(Request $request, Service $service, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getIdService(), $request->request->get('_token'))) {
            $entityManager->remove($service);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
    }
}
