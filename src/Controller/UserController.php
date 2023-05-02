<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\UpdateType;
use App\Form\User\UserType;
use App\Form\User\LoginType;

use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/admin')]
class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/login.html.twig', [
            'controller_name' => 'UserController',

        ]);
    }

    #[Route('/fonc', name: 'fonc', methods: ['GET'])]
    public function fonc(Request $request,VoitureRepository $v, PaginatorInterface $paginator): Response
    {
        $qb = $v->createQueryBuilder('c')
        ->orderBy('c.datefabrication', 'ASC'); // default order
        // Add sorting based on the query parameters
        $sortField = $request->query->get('sortField', 'datefabrication');
        $sortDirection = $request->query->get('sortDirection', 'asc');
        $qb->orderBy("c.$sortField", $sortDirection);

        // Add a search filter based on the query parameter 'q'
        $q = $request->query->get('q');
        if ($q) {
            $qb->andWhere('c.matricule LIKE :search')
            ->setParameter('search', '%' . $q . '%');
        }

        // Paginate the results
        $pagination = $paginator->paginate(
            $qb, // query builder
            $request->query->getInt('page', 1), // current page number
            2 // maximum number of results per page
        );

        // if ($this->isGranted('ROLE_ADMIN')){
            return $this->render('voiture/afficheV.html.twig', [
                'pagination' => $pagination,
                'sortField' => $sortField,
                'sortDirection' => $sortDirection,
                
            ]);
        // }else{
        //     return $this->render('error_pages/meme.html.twig');
        // }
    }

    #[Route('/dashboard/users/filter', name: 'dashboard')]
    public function dashboard(UserRepository $userRepository,PaginatorInterface $paginator,Request $request): Response
    {
         // Add a search filter based on the query parameter 'q'
         
        $data = $userRepository->getClientsByCountry();
        $users = $userRepository->findAll();

        $users = $paginator->paginate($users,
        $request->query->getInt('page',1),2);

        return $this->render('user/show.html.twig', [
            'users' => $users,
            'results' => $data,

        ]);
    }

    #[Route('/dashboard/users', name: 'app_users_admin')]
    public function dash(UserRepository $userRepository,PaginatorInterface $paginator,Request $request): Response
    {
         // Add a search filter based on the query parameter 'q'
         
        $data = $userRepository->getClientsByCountry();
        $users = $userRepository->findAll();

        $users = $paginator->paginate($users,
        $request->query->getInt('page',1),2);

        return $this->render('Admin/index.html.twig', [
            'users' => $users,
            'results' => $data,

        ]);
    }

    #[Route('/disabled/{id}', name: 'app_user_banned')]
    public function banned_user($id, UserRepository $userRepository): Response
    {
        $user = $userRepository->findById($id);
        $user->isBanned(true);
        $userRepository->save($user);
        $users = $userRepository->findAll();
        //dd($users);
        return $this->render('user/show.html.twig', array(
            'users' => $users,
        ));
    }



    #[Route('/users/update/{id}', name: 'app_users_update', methods: ['GET', 'POST'])]
    public function edit(EntityManagerInterface $entityManager, Request $request, User $user, UserRepository $userRepository): Response
    {
        
        
        
        $form = $this->createForm(UpdateType::class, $user);
        $form->handleRequest($request);
    

        
        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_users_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/update.html.twig', [
            'user' => $user,
            'form' => $form,
            'id' => $user->getId(),
        ]);
    }




    // #[Route('/users/delete', name: 'app_users_delete')]
    // public function delete(Request $request,UserRepository $userRepository,ManagerRegistry $doctrine): Response
    // {
    //     $id = $request->query->get('id', 'null');
    //     if($id!='null'){
    //         $em = $doctrine->getManager();
    //         $user = $userRepository->find($id);
    //         $em->remove($user);
    //         $em->flush();
    //         return $this->redirectToRoute('app_users_admin');
    //     }
    //     return $this->redirectToRoute('app_users_admin');
    // }
    //   #[Route('users/delete/{id}', name: 'app_users_delete')]
    //     public function delete(Request $request, $id) {
    //         $user= $this->getDoctrine()->getRepository(User::class)->find($id);


    //         $entityManager = $this->getDoctrine()->getManager();
    //         $entityManager->remove($user);
    //         $entityManager->flush();
    //         $response = new Response();
    //         $response->send();
    //         return $this->redirectToRoute('app_users_admin');
    //     }
    #[Route('/{id}', name: 'app_users_delete', methods: ['POST'])]
    public function delete(Request $request, User $student, UserRepository $studentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $student->getId(), $request->request->get('_token'))) {
            $studentRepository->remove($student, true);
        }

        return $this->redirectToRoute('app_users_admin', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}', name: 'app_user_afficher', methods: ['GET'])]
    public function afficher(User $user): Response
    {
        return $this->render('user/afficher.html.twig', [
            'user' => $user,
        ]);
    }
}
