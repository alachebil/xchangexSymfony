<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use App\Entity\PdfGeneratorService;
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

use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;

use Endroid\QrCode\Label\Font\NotoSans;

#[Route('/service')]
class ServiceController extends AbstractController
{

    #[Route('/pdf', name: 'generator_service3')]
    public function pdfService(EntityManagerInterface $entityManager): Response
{ 
    $services = $entityManager->getRepository(Service::class)
        ->findAll();

    $html = $this->renderView('pdf/index.html.twig', ['services' => $services]);
    $pdfGeneratorService = new PdfGeneratorService();
    $pdf = $pdfGeneratorService->generatePdf($html);

    return new Response($pdf, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="document.pdf"',
    ]);
}

    #[Route('/show_in_map/{idService}', name: 'app_service_map', methods: ['GET'])]
    public function Map( Service $id,EntityManagerInterface $entityManager ): Response
    {

        $id = $entityManager
            ->getRepository(Service::class)->findBy( 
                ['idService'=>$id ]
            );
        return $this->render('service/api_arcgis.html.twig', [
            'services' => $id,
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
    public function index(EntityManagerInterface $entityManager): Response
    {$service=new Service();
        $services = $entityManager
            ->getRepository(Service::class)
            ->findAll();
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
