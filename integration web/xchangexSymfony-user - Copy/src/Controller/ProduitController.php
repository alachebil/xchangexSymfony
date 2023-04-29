<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use App\Repository\ReductionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use TCPDF;

#[Route('/produit')]
class ProduitController extends AbstractController
{
    #[Route('/', name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $q = $request->query->get('q');
        $donnees = $produitRepository->findAll();
        $produit = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
          2   // Nombre de résultats par page
        );
    
        return $this->render('front/produit.html.twig', [
            'produits' => $produit,
        ]);
    }
    #[Route('/pdf', name: 'generate_pdf', methods: ['GET'])]
    public function generatePdfAction(ProduitRepository $clubRepository)
    {
        $clubs = $clubRepository->findAll();
    // créer une instance de TCPDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // définir les informations du document
    $pdf->SetCreator('Mon application Symfony');
    $pdf->SetAuthor('Moi');
    $pdf->SetTitle('Liste des Produit');
    $pdf->SetSubject('Liste des produit');

    // ajouter une page
    $pdf->AddPage();

    // créer le contenu du PDF
    $html = $this->renderView('produit/list.html.twig', [
        'produits' => $clubs,
    ]);     

    // écrire le contenu dans le PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // sauvegarder le PDF sur le bureau
         $projectDir = $this->getParameter('kernel.project_dir');

     // Use the project directory path to define the path to the PDF file
     $pdfPath = $projectDir . '/public/pdf/liste_produit.pdf';
    $pdf->Output($pdfPath, 'F');

    // renvoyer une réponse HTTP
    $response = new Response();
    $disposition = $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        'liste_produit.pdf'
    );
    $response->headers->set('Content-Type', 'application/pdf');
    $response->headers->set('Content-Disposition', $disposition);
    $response->setContent(file_get_contents($pdfPath));

    return $response;
}
    #[Route('/roue', name: 'app_produit_roue', methods: ['GET'])]
    public function roue(Request $request,ProduitRepository $produitRepositoryr,MailerInterface $mailer): Response
    {     $produit=new Produit();
        $produit=$produitRepositoryr->find(1);
        $value = $request->query->get('value');
        switch($value)
        {case 1:
         
          
          
          break;
          case 2:
            
          
           break;
           case 6:
            
           
           break;
           case 7:
            
             break;
             case 13:
               
               
                 break;
             case 9:
                $code=rand(1000000,9999999);
                $email = (new TemplatedEmail())
    ->from('mootaz.bekri@esprit.tn')
    ->to('medamine.nouira@esprit.tn')
    ->subject('You have won!')

    // path of the Twig template to render
    ->htmlTemplate('produit/mailevent.html.twig')
    ->context([
        'expiration_date' => new \DateTime('+7 days'),
        'username' => "mootaz",
        'code' => $code,
        
    ]);
    try {
        $mailer->send($email);
    } catch (TransportExceptionInterface $e) {
        echo("error");
        // some error prevented the email sending; display an
        // error message or try to resend the message
    }
    break;

        }
        return $this->render('produit/roue.html.twig');
    }
    
    #[Route('/front', name: 'app_produit_front', methods: ['GET'])]
    public function indexF(ProduitRepository $produitRepository,Request $request, PaginatorInterface $paginator): Response
    {
        $q = $request->query->get('q');
        if($q)
        {
            $donnees = $produitRepository->searchByName($q);
        }
        else
        $donnees = $produitRepository->findAll();
        $produit = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
          2   // Nombre de résultats par page
        );
       
       
        return $this->render('frrontprduit/product.html.twig', [
            'produits' => $produit,
        ]);
    }
    #[Route('/sort', name: 'app_produit_sort', methods: ['GET'])]
    public function indexS(ProduitRepository $produitRepository,Request $request, PaginatorInterface $paginator): Response
    {
       
      
        
        $donnees = $produitRepository->Sort();
        $produit = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
          3   // Nombre de résultats par page
        );
       
       
        return $this->render('frrontprduit/product.html.twig', [
            'produits' => $produit,
        ]);
    }

    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProduitRepository $produitRepository): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            
            // Handle file upload
            $file = $produit->getImageFile();
            if ($file) {
               
                $newFileName =uniqid().'.'.$file->guessExtension();
               
                $file->move(
                    $this->getParameter('images_directory'),
                    $newFileName
                );

                $produit->setImageName($newFileName);
                $produitRepository->save($produit, true);
            }
            

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/add.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produit_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('front/show.html.twig', [
            'produit' => $produit,
        ]);
    }
    
    #[Route('/front/detail/{id}', name: 'app_produit_showF', methods: ['GET'])]
    public function showFront(Produit $produit): Response
    {
        return $this->render('frrontprduit/detail.html.twig', [
            'produit' => $produit,
        ]);
    }
    #[Route('/front/detaill/{id}', name: 'app_produit_red', methods: ['GET'])]
    public function showred(Produit $produit,Request $req,ReductionRepository $rp): Response
    { 

         $red= $req->get('q');
         $r = $rp->find($red);
         if ( $r != null){
            $newPrice = $r->getValeur();
            $rp->remove($r, true);

         }else 
         $newPrice = 0;
         
         
        return $this->render('frrontprduit/Reduc.html.twig', [
            'produit' => $produit,'newPrice'=>$newPrice
        ]);
    }


   
    #[Route('/{id}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, ProduitRepository $produitRepository): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          // Handle file upload
          $file = $produit->getImageFile();
          if ($file) {
             
              $newFileName =uniqid().'.'.$file->guessExtension();
             
              $file->move(
                  $this->getParameter('images_directory'),
                  $newFileName
              );

              $produit->setImageName($newFileName);
              $produitRepository->save($produit, true);
          }
          
        }

        return $this->renderForm('front/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Request $request, Produit $produit, ProduitRepository $produitRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $produitRepository->remove($produit, true);
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
    
    
}
