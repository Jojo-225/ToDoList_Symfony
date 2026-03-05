<?php

namespace App\Controller;

use App\Entity\ToDoList;
use App\Repository\ToDoListRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ToDoListType;

final class ToDoListContollerPhpController extends AbstractController
{
   #[Route('/tache',name:'tache.index')]
   public function index(ToDoListRepository $toDoListRepository): Response
   {
       $taches = $toDoListRepository->findAll();
       return $this->render('to_do_list_contoller_php/index.html.twig', [
           'taches' => $taches,
       ]);

   }

   #[Route('/tache/{id}', name: 'tache.show')]
   public function show(int $id, ToDoListRepository $toDoListRepository): Response
   {
       $tache = $toDoListRepository->find($id);
       return $this->render('to_do_list_contoller_php/show.html.twig', [
           'tache' => $tache,
       ]);
   }

   #[Route('/taches/{id}/edit', name: 'tache.edit', methods: ['GET', 'POST'])]
   public function create(Request $request, EntityManagerInterface $em): Response
   {
       $form = $this->createForm(ToDoListType::class, $tache);
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
          $em->flush();
          $this->addFlash('success', 'La tâche a été modifée avec succès.');
          return $this->redirectToRoute('tache.index');
        }

       return $this->render('to_do_list_contoller_php/edit.html.twig', [
           'form' => $form->createView(),
       ]);
   }
      #[Route('/taches/create', name: 'tache.create')]
     public function create(Request $request, EntityManagerInterface $em): Response{
        $todolist= new ToDoList();
       $form = $this->createForm(ToDoListType::class, $todolist);
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($todolist);
          $em->flush();
          $this->addFlash('success', 'La tâche a été créée avec succès.');
          return $this->redirectToRoute('tache.index');
        }

       return $this->render('to_do_list_contoller_php/create.html.twig', [
           'form' => $form->createView(),
       ]);
   }

}
