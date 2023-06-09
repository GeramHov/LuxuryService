<?php

namespace App\Controller;

use App\Entity\Offers;
use App\Form\OffersType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/offers')]
class OffersController extends AbstractController
{
    #[Route('/', name: 'app_offers_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $offers = $entityManager
            ->getRepository(Offers::class)
            ->findAll();

        return $this->render('offers/index.html.twig', [
            'offers' => $offers,
        ]);
    }

    #[Route('/new', name: 'app_offers_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offer = new Offers();
        $form = $this->createForm(OffersType::class, $offer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offer);
            $entityManager->flush();

            return $this->redirectToRoute('app_offers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offers/new.html.twig', [
            'offer' => $offer,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_offers_show', methods: ['GET'])]
    public function show(Offers $offer): Response
    {
        return $this->render('offers/show.html.twig', [
            'offer' => $offer,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_offers_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offers $offer, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffersType::class, $offer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_offers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offers/edit.html.twig', [
            'offer' => $offer,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_offers_delete', methods: ['POST'])]
    public function delete(Request $request, Offers $offer, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offer->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offers_index', [], Response::HTTP_SEE_OTHER);
    }
}
