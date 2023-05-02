<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use App\Service\PdfGeneratorService as CustomPdfGeneratorService;
use Endroid\QrCode\Writer\PngWriter;
use App\Repository\ServiceRepository;
use Endroid\QrCode\Encoding\Encoding;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Color\Color;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

use TCPDF;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;

use Endroid\QrCode\Label\Font\NotoSans;

#[Route('/service')]
class ServiceController extends AbstractController
{

    
//     public function pdfService(EntityManagerInterface $entityManager): Response
// { 
//     $services = $entityManager->getRepository(Service::class)
//         ->findAll();

//     $html = $this->renderView('pdf/index.html.twig', ['services' => $services]);
//     $pdfGeneratorService = new CustomPdfGeneratorService();   
//     $pdf = $pdfGeneratorService->generatePdf($html);

//     return new Response($pdf, 200, [
//         'Content-Type' => 'application/pdf',
//         'Content-Disposition' => 'inline; filename="document.pdf"',
//     ]);
// }
#[Route('/pdf', name: 'generator_service3')]
public function generatePdfAction(ServiceRepository $clubRepository)
    {
        $services = $clubRepository->findAll();
    // créer une instance de TCPDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // définir les informations du document
    $pdf->SetCreator('Mon application Symfony');
    $pdf->SetAuthor('Moi');
    $pdf->SetTitle('Liste des clubs');
    $pdf->SetSubject('Liste des clubs');

    // ajouter une page
    $pdf->AddPage();

    // créer le contenu du PDF
    $html = $this->renderView('pdf/index.html.twig', [
        'services' => $services,
    ]);

    // écrire le contenu dans le PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // sauvegarder le PDF sur le bureau
         $projectDir = $this->getParameter('kernel.project_dir');

     // Use the project directory path to define the path to the PDF file
     $pdfPath = $projectDir . '/public/pdfs/liste_service.pdf';
    $pdf->Output($pdfPath, 'F');

    // renvoyer une réponse HTTP
    $response = new Response();
    $disposition = $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        'liste_services.pdf'
    );
    $response->headers->set('Content-Type', 'application/pdf');
    $response->headers->set('Content-Disposition', $disposition);
    $response->setContent(file_get_contents($pdfPath));

    return $response;
}

    #[Route('/show_in_map/{id}', name: 'app_service_map', methods: ['GET'])]
    public function Map( Service $id,EntityManagerInterface $entityManager ): Response
    {

        $id = $entityManager
        ->getRepository(Service::class)->findBy(['id' => $id]);
   
        return $this->render('service/api_arcgis.html.twig', [
            'services' => $id,
            // 'lieuService'=> $id->getLieuService(),
        ]);
    }

    public function qrcoding($data)
    {$writer = new PngWriter();
     $qrCode = QrCode::create($data)
         ->setEncoding(new Encoding('UTF-8'))
         ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
         ->setSize(500)
         ->setMargin(0)
         ->setForegroundColor(new Color(0, 0, 0))
         ->setBackgroundColor(new Color(255, 255, 255));
     $logo = Logo::create('assetF/images/R2.png')
         ->setResizeToWidth(90);
     $label = Label::create('')->setFont(new NotoSans(8));
 
     $qrCodes = [];
     $qrCode->setSize(200)->setForegroundColor(new Color(0, 0, 0))->setBackgroundColor(new Color(255, 255, 255));
     $qrCodes['img'] = $writer->write($qrCode, $logo)->getDataUri();
     $qrCodes['simple'] = $writer->write(
                             $qrCode,
                             null,
                             $label->setText('Simple')
                         )->getDataUri();
 
     $qrCode->setForegroundColor(new Color(255, 0, 0));
     $qrCodes['changeColor'] = $writer->write(
         $qrCode,
         null,
         $label->setText('Color Change')
     )->getDataUri();
 
     $qrCode->setForegroundColor(new Color(0, 0, 0))->setBackgroundColor(new Color(255, 0, 0));
     $qrCodes['changeBgColor'] = $writer->write(
         $qrCode,
         null,
         $label->setText('Background Color Change')
     )->getDataUri();
 
     $qrCode->setSize(200)->setForegroundColor(new Color(0, 0, 0))->setBackgroundColor(new Color(255, 255, 255));
     $qrCodes['withImage'] = $writer->write(
         $qrCode,
         $logo,
         $label->setText('Reused')->setFont(new NotoSans(20))
     )->getDataUri();
     return $qrCodes;
 }
 
 
    #[Route('/', name: 'app_service_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager , ServiceRepository $sr): Response
    {$service=new Service();
        $services = $sr->findAll();
            foreach($services as $service)
            {$Qrcodes[]=$this->qrcoding('Titre :' . $service->getTitreService(). '*****   Type :' . $service->getTypeService() . '**** Lieu :
                ' . $service->getLieuService() );}

        return $this->render('service/index.html.twig', [
            'services' => $services,
            'qrcodes' =>$Qrcodes,
        ]);
    }
    
    #[Route('/back', name: 'app_service_indexback', methods: ['GET','POST'])]
    public function back(EntityManagerInterface $entityManager, ServiceRepository $ServiceRepository, Request $request): Response
    {
        $services = $entityManager
            ->getRepository(Service::class)
            ->findAll();

            ////////
        $back = null;
        
        if($request->isMethod("POST")){
            if ( $request->request->get('optionsRadios')){
                $SortKey = $request->request->get('optionsRadios');
                switch ($SortKey){
                    case 'titreService':
                        $services = $ServiceRepository->SortBytitreService();
                        break;

                    case 'descriptionService':
                        $services = $ServiceRepository->SortBydescriptionService();
                        break;

                    case 'lieuService':
                        $services = $ServiceRepository->SortBylieuService();
                        break;


                }
            }
            else
            {
                $type = $request->request->get('optionsearch');
                $value = $request->request->get('Search');
                switch ($type){
                    case 'titreService':
                        $services = $ServiceRepository->findBytitreService($value);
                        break;

                    case 'descriptionService':
                        $services = $ServiceRepository->findBydescriptionService($value);
                        break;

                    case 'lieuService':
                        $services = $ServiceRepository->findBylieuService($value);
                        break;


                }
            }

            if ( $services){
                $back = "success";
            }else{
                $back = "failure";
            }
        }
            ////////

        return $this->render('service/indexback.html.twig', [
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
            $maxLength = 50;

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

    #[Route('/{id}', name: 'app_service_show', methods: ['GET'])]
    public function show(Service $service): Response
    {
        return $this->render('service/show.html.twig', [
            'service' => $service,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_service_edit', methods: ['GET', 'POST'])]
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

           
            $entityManager->flush();

            return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('service/edit.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_service_delete', methods: ['POST'])]
    public function delete(Request $request, Service $service, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $entityManager->remove($service);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_service_index', [], Response::HTTP_SEE_OTHER);
    }
}
