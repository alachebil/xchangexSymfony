<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\PdfGeneratorService;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;


#[Route('/evenement')]
class EvenementController extends AbstractController
{
    #[Route("/AllEvenement", name: "list")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et StudentRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getStudents(EvenementRepository $repo, SerializerInterface $serializer)
    {
        $evenements = $repo->findAll();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* students en  tableau associatif simple.
        // $studentsNormalises = $normalizer->normalize($students, 'json', ['groups' => "students"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($studentsNormalises);

        $json = $serializer->serialize($evenements, 'json', ['groups' => "Evenement"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    }



    
#[Route("/updateEventJSON/{idev}", name: "updateEventJSON")]
public function updateEventJSON(Request $req, $idev, NormalizerInterface $Normalizer)
{

    $em = $this->getDoctrine()->getManager();
    $evenement = $em->getRepository(Evenement::class)->find($idev);
    // $evenement->setNomev($req->get('nomev'));
    //$evenement->setDate($req->get('date'));
    // $evenement->setDatefev($req->get('datefev'));
    // $evenement->setLocalisation($req->get('localisation'));
    // $evenement->setImageev($req->get('imageev'));
    $evenement->setNomEvent($req->get('nomEvent'));
    // $evenement->setTypeEvent($req->get('typeEvent'));
    // $evenement->setNbParticipants($req->get('nbParticipants'));

    $em->flush();

    $jsonContent = $Normalizer->normalize($evenement, 'json', ['groups' => 'Evenement']);
    return new Response("Event updated successfully " . json_encode($jsonContent));
}

    
    #[Route("/Addjson", name: "Addjson")]
public function addStudentJSON(Request $req,   NormalizerInterface $Normalizer)
{

    $em = $this->getDoctrine()->getManager();
    $evenement = new Evenement();
    $evenement->setNomEvent($req->get('nomEvent'));
    // $evenement->setTypeEvent($req->get('typeEvent'));
    // // $evenement->setNbParticipants($req->get('nbParticipants'));
    // $evenement->setDescriptionEvent($req->get('descriptionEvent'));
    $em->persist($evenement);
    $em->flush();

    $jsonContent = $Normalizer->normalize($evenement, 'json', ['groups' => 'Evenement']);
    return new Response(json_encode($jsonContent));
}








    #[Route("/deleteEventJSON/{idev}", name: "deleteEventJSON")]
    public function deleteEventJSON(Request $req, $idev, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository(Evenement::class)->find($idev);
        $em->remove($evenement);
        $em->flush();
        $jsonContent = $Normalizer->normalize($evenement, 'json', ['groups' => 'Evenement']);
        return new Response("Event deleted successfully " . json_encode($jsonContent));
    }


    #[Route('/statistique', name: 'app_statist')]
    public function statistiue(EvenementRepository $repo): Response
    {
        $evenement = $repo->stat();
        $idEvenement = [];
        $nbrPart = [];
        $nom = [];

       

     // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
     foreach($evenement as $evenements){  
            $idEvenement[] = $evenements["id"];
            $nbrPart[] = $evenements["count"];
            $nom[] = $evenements["nom"];
    }

    

        return $this->render('evenement/stat.html.twig', [
            'idEvenement' => json_encode($idEvenement),
            'nbrPart' => json_encode($nbrPart),
            'nomEvent' => json_encode($nom),
            
        ]);
    }
    
    #[Route('/show_in_map/{id}', name: 'app_evenement_map', methods: ['GET'])]
    public function Map( Evenement $id,EntityManagerInterface $entityManager ): Response
    {

        $id = $entityManager
            ->getRepository(Evenement::class)->findBy( 
                ['id'=>$id ]
            );
        return $this->render('evenement/api_arcgis.html.twig', [
            'evenements' => $id,
        ]);
    }


    #[Route('/pdf', name: 'generator_service3')]
    public function pdfService(): Response
    { 
        $evenements= $this->getDoctrine()
        ->getRepository(Evenement::class)
        ->findAll();

   

        $html =$this->renderView('pdf/indexevenement.html.twig', ['evenements' => $evenements]);
        $pdfGeneratorService=new PdfGeneratorService();
        $pdf = $pdfGeneratorService->generatePdf($html);

        return new Response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="document.pdf"',
        ]);

    }






    #[Route('/', name: 'app_evenement_index', methods: ['GET','POST'])]
    public function index(EntityManagerInterface $entityManager,EvenementRepository $evenementRepository,Request $request): Response
    {
        $evenements = $entityManager->getRepository(Evenement::class)->findAll();

        /////////
        $back = null;
        
        if($request->isMethod("POST")){
            if ( $request->request->get('optionsRadios')){
                $SortKey = $request->request->get('optionsRadios');
                switch ($SortKey){
                    case 'nomEvent':
                        $evenements = $evenementRepository->SortBynomEvent();
                        break;

                    case 'typeEvent':
                        $evenements = $evenementRepository->SortBytypeEvent();
                        break;

                    case 'date':
                        $evenements = $evenementRepository->SortBydate();
                        break;


                }
            }
            else
            {
                $type = $request->request->get('optionsearch');
                $value = $request->request->get('Search');
                switch ($type){
                    case 'nomEvent':
                        $evenements = $evenementRepository->findBynomEvent($value);
                        break;

                    case 'typeEvent':
                        $evenements = $evenementRepository->findBylieuEvent($value);
                        break;

                    case 'date':
                        $evenements = $evenementRepository->findBydate($value);
                        break;

                }
            }

            if ( $evenements){
                $back = "success";
            }else{
                $back = "failure";
            }
        }
            ////////


        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements, 'back'=>$back
        ]);
    }

    #[Route('/front', name: 'app_evenement_indexFront', methods: ['GET'])]
    public function front(EntityManagerInterface $entityManager,Request $request,PaginatorInterface $paginator): Response
    {
        $evenements = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();

            $evenements = $paginator->paginate(
                $evenements, /* query NOT result */
                $request->query->getInt('page', 1),
                6
            );
        return $this->render('evenement/indexFront.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    #[Route('/home', name: 'app_evenement_home', methods: ['GET'])]
    public function home(EntityManagerInterface $entityManager,Request $request,PaginatorInterface $paginator): Response
    {
        $evenements = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();

            $evenements = $paginator->paginate(
                $evenements, /* query NOT result */
                $request->query->getInt('page', 1),
                6
            );
        return $this->render('home.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $file = $evenement->getImageEvent();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads'),$filename);
            $evenement->setImageEvent($filename);


            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $file = $evenement->getImageEvent();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads'),$filename);
            $evenement->setImageEvent($filename);

            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getid(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }


  
}
