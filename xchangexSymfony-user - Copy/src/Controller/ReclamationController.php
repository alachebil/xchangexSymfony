<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Echange;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Twilio\TwiML\Voice\Sms;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/update_note', name :'update_note', methods :['GET','POST'])]

    public function updateNote(EntityManagerInterface $entityManager, Request $request,Reclamation $reclamation): JsonResponse
    {
        $note = $request->request->get('note');
    
        // update the note field
        $reclamation->setNote($note);
        
        // save the changes to the database
        $entityManager->flush();
    
        return new JsonResponse(['success' => true]);
    }
    
    #[Route('/', name: 'app_reclamation_index', methods: ['GET','POST'])]
    public function index(EntityManagerInterface $entityManager, Request $request, ReclamationRepository $ReclamationRepository): Response
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();
            if($request->isMethod("POST")){
                if ($request->request->get('optionsRadios')){
                    $SortKey = $request->request->get('optionsRadios');
                    switch ($SortKey){
                        /*case 'username':
                            $reclamations = $ReclamationRepository->SortByIdEchange();
                            break;*/

                        case 'note':
                            $reclamations = $ReclamationRepository->SortBynote();
                            break;

                        case 'etatRec':
                            $reclamations = $ReclamationRepository->SortByetatRec();
                            break;
        
                        case 'dateReclamation':
                            $reclamations = $ReclamationRepository->SortBydateReclamation();
                            break;
        
                        case 'descriptionReclamation':
                            $reclamations = $ReclamationRepository->SortBydescriptionReclamation();
                            break;
                    }
                }
                else
                {
                    $type = $request->request->get('optionsearch');
                    $value = $request->request->get('Search');
                    switch ($type){
                        /*case 'idEchange':
                            $reclamations->setIdEchange($idEchan);
                            $reclamations = $ReclamationRepository->findByIdEchange($value);
                            break;*/

                        case 'note':
                            $reclamations = $ReclamationRepository->findBynote($value);
                            break;
                        case 'etatRec':
                            $reclamations = $ReclamationRepository->findByetatRec($value);
                            break;
        
                        case 'dateReclamation':
                            $reclamations = $ReclamationRepository->findBydateReclamation($value);
                            break;
        
                        case 'descriptionReclamation':
                            $reclamations = $ReclamationRepository->findBydescriptionReclamation($value);
                            break;
                    }
                }
        
                if ( $reclamations){
                    $back = "success";
                }else{
                    $back = "failure";
                }
            }

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/front', name: 'app_reclamation_front', methods: ['GET'])]
public function front(EntityManagerInterface $entityManager,Request $request, PaginatorInterface $paginator): Response
{
    
    $reclamations = $entityManager
        ->getRepository(Reclamation::class)
        ->findAll();
    $back = null;

    
    $reclamations = $paginator->paginate(
        $reclamations, /* query NOT result */
        $request->query->getInt('page', 1),
        5
    );

    

    return $this->render('reclamation/front_index.html.twig', [
        'reclamations' => $reclamations,'back'=>$back
    ]);
}


    #[Route('{idEchan}/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,Echange $idEchan,NotifierInterface $notifier): Response
    {
        $reclamation = new Reclamation();
        //$reclamation->setNote($note);
        $reclamation->setIdEchange($idEchan);
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        $myDictionary = array(
            "Tue", "Merde", "Pute",
            "Gueule",
            "débile",
            "Con",
            "abruti",
            "clochard",
            "ala",
            "sang"
        );
        dump($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $myText = $request->get("reclamation")['descriptionReclamation'];
            $badwords = new PhpBadWordsController();
            $badwords->setDictionaryFromArray($myDictionary)
                ->setText($myText);
            $check = $badwords->check();
           

        $file = $reclamation->getImageEvent();
        $filename = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('uploads'),$filename);
        $reclamation->setImageEvent($filename);
        
        $reclamation->setDateReclamation(new \DateTime());
        if ($check) {
                
               
            $notifier->send(new Notification('Mauvais mot ', ['browser']));
            return $this->redirectToRoute('app_echange_front', [], Response::HTTP_SEE_OTHER);
         }
            else{
        $entityManager->persist($reclamation);
        $entityManager->flush();

        return $this->redirectToRoute('app_echange_front', [], Response::HTTP_SEE_OTHER);
            }

            
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }
    #[Route('{idEchan}/newF', name: 'app_reclamation_newF', methods: ['GET', 'POST'])]
    public function newF(Request $request, EntityManagerInterface $entityManager, Echange $idEchan,NotifierInterface $notifier): Response
    {
        //$note = $request->request->getInt('note');
        $reclamation = new Reclamation();
        //$reclamation->setNote($note);
        $reclamation->setIdEchange($idEchan);
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        $myDictionary = array(
            "Tue", "Merde", "Pute",
            "Gueule",
            "débile",
            "Con",
            "abruti",
            "clochard",
            "ala",
            "sang"
        );
        dump($request);

        
            
    
        if ($form->isSubmitted() && $form->isValid()) {
            $myText = $request->get("reclamation")['descriptionReclamation'];
            $badwords = new PhpBadWordsController();
            $badwords->setDictionaryFromArray($myDictionary)
                ->setText($myText);
            $check = $badwords->check();
            dd($myText);

     
        
            $file = $reclamation->getImageEvent();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('uploads'), $filename);
            $reclamation->setImageEvent($filename);
            $reclamation->setDateReclamation(new \DateTime());
            
            if ($check) {
                
               
                $notifier->send(new Notification('Mauvais mot ', ['browser']));
                return $this->redirectToRoute('app_reclamation_newF', [], Response::HTTP_SEE_OTHER);
             }
                else{
            $entityManager->persist($reclamation);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_echange_front', [], Response::HTTP_SEE_OTHER);
                }
        }
    
        return $this->renderForm('reclamation/newF.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }
    

    #[Route('/{idReclamation}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{idReclamation}F', name: 'app_reclamation_showF', methods: ['GET'])]
    public function showF(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/showF.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{idReclamation}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {

        $response = $this->forward('App\Controller\SmsController::sendSms');
            
        $file = $reclamation->getImageEvent();
        $filename = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('uploads'),$filename);
        $reclamation->setImageEvent($filename);
        

            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
            return $this->render('reclamation/edit.html.twig', [
            'sms_response' => $response->getContent(),
            'form' => $form->createView(),
        ]);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
            
                'sms_response' => false
            
        ]);
    }

    #[Route('/sms', name: 'app_reclamation_sms', methods: ['GET', 'POST'])]
    public function sms(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager, Sms $sms): Response
    {

        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
      

            $entityManager->flush();
         return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);

        return $this->renderForm('Form/Sms.php', [
            'reclamation' => $reclamation,
           
        ]);
    }
}
    

    #[Route('/{idReclamation}/editF', name: 'app_reclamation_editF', methods: ['GET', 'POST'])]
    public function editf(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            
        $file = $reclamation->getImageEvent();
        $filename = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('uploads'),$filename);
        $reclamation->setImageEvent($filename);

            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/editF.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idReclamation}F', name: 'app_reclamation_deleteF', methods: ['POST'])]
    public function deleteF(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdReclamation(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_front', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/{idReclamation}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdReclamation(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}
