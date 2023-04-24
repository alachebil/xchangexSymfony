<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Form\LivraisonType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LivraisonRepository;
use App\Entity\PdfGeneratorService;

use App\Service\MailerService; 
use Symfony\Component\Mime\Email; 

#[Route('/livraison')]
class LivraisonController extends AbstractController
{

    #[Route('/show_in_map/{id}', name: 'app_livraison_map', methods: ['GET'])]
    public function Map( Livraison $id,EntityManagerInterface $entityManager ): Response
    {

        $id = $entityManager
            ->getRepository(Livraison::class)->findBy( 
                ['id'=>$id ]
            );
        return $this->render('livraison/api_arcgis.html.twig', [
            'livraisons' => $id,
        ]);
    }

    #[Route('/pdf', name: 'generator_service3')]
    public function pdfService(): Response
    { 
        $livraisons= $this->getDoctrine()
        ->getRepository(Livraison::class)
        ->findAll();

   

        $html =$this->renderView('pdf/pdflivraison.html.twig', ['livraisons' => $livraisons]);
        $pdfGeneratorService=new PdfGeneratorService();
        $pdf = $pdfGeneratorService->generatePdf($html);

        return new Response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="document.pdf"',
        ]);

    }

    #[Route('/randomnumber', name: 'random_number')]
    public function randomNumber()
    {
        $randomNumber = rand(); // Generate a random number
        $httpClient = HttpClient::create();
        $curlResponse = $httpClient->request('GET', 'https://api.breakingbadquotes.xyz/v1/quotes');
        
        return $curlResponse;
        }

    #[Route('/', name: 'app_livraison_index',  methods: ['GET','POST'])]
    public function index(EntityManagerInterface $entityManager, LivraisonRepository $LivraisonRepository,Request $request): Response
    {
        $livraisons = $entityManager
            ->getRepository(Livraison::class)
            ->findAll();
            if($request->isMethod("POST")){
                if ( $request->request->get('optionsRadios')){
                    $SortKey = $request->request->get('optionsRadios');
                    switch ($SortKey){
                        case 'type':
                            $livraisons = $LivraisonRepository->SortBytype_liv();
                            break;
    
                        case 'adress':
                            $livraisons = $LivraisonRepository->SortByadress_liv();
                            break;

                        case 'produit':
                            $livraisons = $LivraisonRepository->SortByproduit();
                            break;
    
    
                    }
                }
                else
                {
                    $type = $request->request->get('optionsearch');
                    $value = $request->request->get('Search');
                    switch ($type){
                        case 'produit':
                            $livraisons = $LivraisonRepository->findByproduitlivraison($value);
                            break;
    
                        case 'adressLiv':
                            $livraisons = $LivraisonRepository->findByadressLiv($value);
                            break;
    
                        case 'typeLiv':
                            $livraisons = $LivraisonRepository->findBytypeLiv($value);
                            break;
    
    
                    }
                }

                if ( $livraisons){
                    $back = "success";
                }else{
                    $back = "failure";
                }
            }

        return $this->render('livraison/index.html.twig', [
            'livraisons' => $livraisons,
        ]);
    }

    #[Route('/home', name: 'app_livraison_home', methods: ['GET'])]
    public function home(EntityManagerInterface $entityManager): Response
    {
        $livraisons = $entityManager
            ->getRepository(Livraison::class)
            ->findAll();


        return $this->render('home.html.twig', [
            'livraisons' => $livraisons,
        ]);
    }

    #[Route('/new', name: 'app_livraison_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,MailerService $mailer): Response
    {
        $livraison = new Livraison();
        $form = $this->createForm(LivraisonType::class, $livraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($livraison);
            $entityManager->flush();
            $user=$form->get('idClient')->getData();
            $to=$user->getEmail();
            $subject="Livraison validée";
            

              $twig = $this->container->get('twig');
              $html=$twig->render('email/email.html.twig',[]);
          
          $mailer->sendEmail($to,$subject,$html);
            

            
           
            
            

            return $this->redirectToRoute('app_livraison_home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('livraison/new.html.twig', [
            'livraison' => $livraison,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_livraison_show', methods: ['GET'])]
    public function show(Livraison $livraison): Response
    {
        return $this->render('livraison/show.html.twig', [
            'livraison' => $livraison,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_livraison_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Livraison $livraison, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LivraisonType::class, $livraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_livraison_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('livraison/edit.html.twig', [
            'livraison' => $livraison,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_livraison_delete', methods: ['POST'])]
    public function delete(Request $request, Livraison $livraison, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livraison->getId(), $request->request->get('_token'))) {
            $entityManager->remove($livraison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_livraison_index', [], Response::HTTP_SEE_OTHER);
    }
    /*#[Route('/pdf', name: 'app_rendezvous_pdf', methods: ['GET'])]
    public function index_pdf(LivraisonRepository $rendezvousRepository)
    {
        $pdfoptions=new Options();
        $pdfoptions->get('defaultFont','Arial');
        $dompdf=new dompdf();
        $logo = file_get_contents("logo.png");
        $logobase64 = base64_encode($logo);
        $rendezvouses=$rendezvousRepository->findAll();

        $html=$this->renderView('rendezvous/rendezvoupdf.html.twig', [
            'rendezvouses' => $rendezvouses,
            'logobase64'=>$logobase64,
        ]);
       $dompdf->loadHtml($html);
       $dompdf->setPaper('A4','portrait');
       $dompdf->render();
       $dompdf->stream('Rendez-Vous List.pdf',["Attachement" => false]);

    }*/

    


}
