<?php

namespace App\Controller;

use App\Entity\Habilitante;
use App\Form\HabilitanteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/habilitante')]
class HabilitanteController extends AbstractController
{
    #[Route('/', name: 'app_habilitante_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $habilitantes = $entityManager
            ->getRepository(Habilitante::class)
            ->findAll();

        return $this->render('habilitante/index.html.twig', [
            'habilitantes' => $habilitantes,
        ]);
    }

    #[Route('/new', name: 'app_habilitante_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $habilitante = new Habilitante();
        $form = $this->createForm(HabilitanteType::class, $habilitante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($habilitante);
            $entityManager->flush();

            return $this->redirectToRoute('app_habilitante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('habilitante/new.html.twig', [
            'habilitante' => $habilitante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_habilitante_show', methods: ['GET'])]
    public function show(Habilitante $habilitante): Response
    {
        return $this->render('habilitante/show.html.twig', [
            'habilitante' => $habilitante,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_habilitante_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Habilitante $habilitante, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HabilitanteType::class, $habilitante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_habilitante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('habilitante/edit.html.twig', [
            'habilitante' => $habilitante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_habilitante_delete', methods: ['POST'])]
    public function delete(Request $request, Habilitante $habilitante, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$habilitante->getId(), $request->request->get('_token'))) {
            $entityManager->remove($habilitante);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_habilitante_index', [], Response::HTTP_SEE_OTHER);
    }
}
