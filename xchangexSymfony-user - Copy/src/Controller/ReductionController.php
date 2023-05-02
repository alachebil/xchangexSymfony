<?php

namespace App\Controller;

use App\Entity\Reduction;
use App\Form\ReductionType;
use App\Repository\ReductionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Swift_Message;
use Swift_Mailer;
use Swift_SmtpTransport;

#[Route('/reduction')]
class ReductionController extends AbstractController
{
    #[Route('/mailing/{id}', name: 'app_reduction_mailing')]
    public function mailing(Reduction $reduction): Response
    { 
        $id= $reduction->getId();
        $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
        ->setUsername('recycle.tunisia')
        ->setPassword('ztntffukvpwraygm');
     
        $mailer = new Swift_Mailer($transport);
    
        $message = (new Swift_Message('Code Reduction'))
        ->setFrom(['recycle.tunisia@gmail.com' => 'Recycle tunisia'])
        ->setTo('mootaz.bekri@esprit.tn')
        ->setBody('Felicitation vous avez gagnee une reduction de ' . $id);
    
        $mailer->send($message);

        return $this->redirectToRoute('app_reduction_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/', name: 'app_reduction_index', methods: ['GET'])]
    public function index(ReductionRepository $reductionRepository): Response
    {
        return $this->render('front/showReduction.html.twig', [
            'reductions' => $reductionRepository->findAll(),
        ]);
    }
   

    #[Route('/new', name: 'app_reduction_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReductionRepository $reductionRepository): Response
    {
        $reduction = new Reduction();
        $form = $this->createForm(ReductionType::class, $reduction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reductionRepository->save($reduction, true);

            return $this->redirectToRoute('app_reduction_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/addReduction.html.twig', [
            'reduction' => $reduction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reduction_show', methods: ['GET'])]
    public function show(Reduction $reduction): Response
    {
        return $this->render('reduction/show.html.twig', [
            'reduction' => $reduction,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reduction_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reduction $reduction, ReductionRepository $reductionRepository): Response
    {
        $form = $this->createForm(ReductionType::class, $reduction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reductionRepository->save($reduction, true);

            return $this->redirectToRoute('app_reduction_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reduction/edit.html.twig', [
            'reduction' => $reduction,
            'form' => $form,
        ]);
    }
    

    #[Route('/{id}', name: 'app_reduction_delete', methods: ['POST'])]
    public function delete(Request $request, Reduction $reduction, ReductionRepository $reductionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reduction->getId(), $request->request->get('_token'))) {
            $reductionRepository->remove($reduction, true);
        }

        return $this->redirectToRoute('app_reduction_index', [], Response::HTTP_SEE_OTHER);
    }
   

}
