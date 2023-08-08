<?php

namespace App\Controller;

use App\Entity\Docente;
use App\Form\DocenteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/docente')]
class DocenteController extends AbstractController
{
    #[Route('/', name: 'app_docente_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $docentes = $entityManager
            ->getRepository(Docente::class)
            ->findAll();

        return $this->render('docente/index.html.twig', [
            'docentes' => $docentes,
        ]);
    }

    #[Route('/new', name: 'app_docente_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $docente = new Docente();
        $form = $this->createForm(DocenteType::class, $docente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($docente);
            $entityManager->flush();

            return $this->redirectToRoute('app_docente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('docente/new.html.twig', [
            'docente' => $docente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_docente_show', methods: ['GET'])]
    public function show(Docente $docente): Response
    {
        return $this->render('docente/show.html.twig', [
            'docente' => $docente,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_docente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Docente $docente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DocenteType::class, $docente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_docente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('docente/edit.html.twig', [
            'docente' => $docente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_docente_delete', methods: ['POST'])]
    public function delete(Request $request, Docente $docente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$docente->getId(), $request->request->get('_token'))) {
            $entityManager->remove($docente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_docente_index', [], Response::HTTP_SEE_OTHER);
    }
}
