<?php

namespace App\Controller;

use App\Entity\Echange;
use App\Form\EchangeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EchangeRepository;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/echange')]
class EchangeController extends AbstractController
{
    #[Route('/', name: 'app_echange_index', methods: ['GET','POST'])]
    public function index(EntityManagerInterface $entityManager,Request $request, EchangeRepository $EchangeRepository): Response
    {
        $echanges = $entityManager
            ->getRepository(Echange::class)
            ->findAll();
            $back = null;
        
            if($request->isMethod("POST")){
                if ($request->request->get('optionsRadios')){
                    $SortKey = $request->request->get('optionsRadios');
                    switch ($SortKey){
                        case 'username':
                            $echanges = $EchangeRepository->SortByUsername();
                            break;
        
                        case 'dateEchange':
                            $echanges = $EchangeRepository->SortByDateEchange();
                            break;
        
                        case 'lieuEchange':
                            $echanges = $EchangeRepository->SortByLieuEchange();
                            break;

                        case 'typeEchange':
                            $echanges = $EchangeRepository->SortByTypeEchange();
                            break;
                        
                    }
                }
                else
                {
                    $type = $request->request->get('optionsearch');
                    $value = $request->request->get('Search');
                    switch ($type){
                        case 'username':
                            $echanges = $EchangeRepository->findByUsername($value);
                            break;
        
                        case 'dateEchange':
                            $echanges = $EchangeRepository->findByDateEchange($value);
                            break;
        
                        case 'lieuEchange':
                            $echanges = $EchangeRepository->findByLieuEchange($value);
                            break;
                        
                        case 'typeEchange':
                            $echanges = $EchangeRepository->findByTypeEchange($value);
                            break;
                    }
                }
        
                if ( $echanges){
                    $back = "success";
                }else{
                    $back = "failure";
                }
            }

        return $this->render('echange/index.html.twig', [
            'echanges' => $echanges, 'back'=>$back
        ]);
    }

    #[Route('/front', name: 'app_echange_front', methods: ['GET'])]
    public function front(EntityManagerInterface $entityManager,Request $request, PaginatorInterface $paginator): Response
    {
        $echanges = $entityManager
            ->getRepository(Echange::class)
            ->findAll();
            $echanges = $paginator->paginate(
            $echanges, /* query NOT result */
            $request->query->getInt('page', 1),
            5
            );

        return $this->render('echange/front_index.html.twig', [
            'echanges' => $echanges,
        ]);
    }

    #[Route('/newF', name: 'app_echange_newF', methods: ['GET', 'POST'])]
    public function newFront(Request $request, EntityManagerInterface $entityManager): Response
    {
        $echange = new Echange();
        $form = $this->createForm(EchangeType::class, $echange);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $echange->setDateEchange($form->get('dateEchange')->getData()); // Set dateEchange to the value submitted in the form
            $entityManager->persist($echange);
            $entityManager->flush();
        
            return $this->redirectToRoute('app_echange_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('echange/newF.html.twig', [
            'echange' => $echange,
            'form' => $form,
        ]);
    }

    #[Route('/new', name: 'app_echange_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $echange = new Echange();
        $form = $this->createForm(EchangeType::class, $echange);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $echange->setDateEchange($form->get('dateEchange')->getData()); // Set dateEchange to the value submitted in the form
            $entityManager->persist($echange);
            $entityManager->flush();
        
            return $this->redirectToRoute('app_echange_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('echange/new.html.twig', [
            'echange' => $echange,
            'form' => $form,
        ]);
    }

   /* #[Route('/new', name: 'app_echange_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $echange = new Echange();
        $form = $this->createForm(EchangeType::class, $echange);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $echange->setDateEchange(new \DateTime()); // Set dateEchange to DateTime object
            $entityManager->persist($echange);
            $entityManager->flush();
        
            return $this->redirectToRoute('app_echange_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('echange/new.html.twig', [
            'echange' => $echange,
            'form' => $form,
        ]);
    }*/

    #[Route('/{idEchange}', name: 'app_echange_show', methods: ['GET'])]
    public function show(Echange $echange): Response
    {
        $dateString = $echange->getDateEchange();

        return $this->render('echange/show.html.twig', [
            'echange' => $echange,
            'dateString' => $dateString,
        ]);
    }

    #[Route('/{idEchange}', name: 'app_echange_showF', methods: ['GET'])]
    public function showFront(Echange $echange): Response
    {
        $dateString = $echange->getDateEchange();

        return $this->render('echange/showF.html.twig', [
            'echange' => $echange,
            'dateString' => $dateString,
        ]);
    }


    #[Route('/{idEchange}/editF', name: 'app_echange_editF', methods: ['GET', 'POST'])]
    public function editFront(Request $request, Echange $echange, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EchangeType::class, $echange);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_echange_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('echange/editF.html.twig', [
            'echange' => $echange,
            'form' => $form,
        ]);
    }
    #[Route('/{idEchange}/edit', name: 'app_echange_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Echange $echange, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EchangeType::class, $echange);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_echange_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('echange/edit.html.twig', [
            'echange' => $echange,
            'form' => $form,
        ]);
    }

    #[Route('/{idEchange}', name: 'app_echange_delete', methods: ['POST'])]
    public function delete(Request $request, Echange $echange, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$echange->getIdEchange(), $request->request->get('_token'))) {
            $entityManager->remove($echange);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_echange_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{idEchange}F', name: 'app_echange_deleteF', methods: ['POST'])]
    public function deleteFront(Request $request, Echange $echange, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$echange->getIdEchange(), $request->request->get('_token'))) {
            $entityManager->remove($echange);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_echange_front', [], Response::HTTP_SEE_OTHER);
    }
}
