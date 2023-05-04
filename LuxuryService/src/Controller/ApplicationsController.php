<?php

namespace App\Controller;

use App\Entity\Applications;
use App\Form\ApplicationsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/applications')]
class ApplicationsController extends AbstractController
{
    #[Route('/', name: 'app_applications_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $applications = $entityManager
            ->getRepository(Applications::class)
            ->findAll();

        return $this->render('applications/index.html.twig', [
            'applications' => $applications,
        ]);
    }

    #[Route('/new', name: 'app_applications_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $application = new Applications();
        $form = $this->createForm(ApplicationsType::class, $application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($application);
            $entityManager->flush();

            return $this->redirectToRoute('app_applications_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('applications/new.html.twig', [
            'application' => $application,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_applications_show', methods: ['GET'])]
    public function show(Applications $application): Response
    {
        return $this->render('applications/show.html.twig', [
            'application' => $application,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_applications_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Applications $application, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ApplicationsType::class, $application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_applications_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('applications/edit.html.twig', [
            'application' => $application,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_applications_delete', methods: ['POST'])]
    public function delete(Request $request, Applications $application, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$application->getId(), $request->request->get('_token'))) {
            $entityManager->remove($application);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_applications_index', [], Response::HTTP_SEE_OTHER);
    }
}
