<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Clients;
use App\Entity\JobCategory;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Offers;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/clients/list', name: 'app_admin_client_list')]
    public function clientList(EntityManagerInterface $entityManager): Response
    {
        $clients = $entityManager->getRepository(Clients::class)->findAll();
        return $this->render('admin/client/index.html.twig', [
            'controller_name' => 'AdminController',
            'clients' => $clients
        ]);
    }

    #[Route('/admin/clients/new', name: 'app_admin_client_new')]
    public function newClient(): Response
    {
        return $this->render('admin/client/new.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/clients/save', name: 'app_admin_client_save')]
    public function saveClient(Request $request, EntityManagerInterface $entityManager ): Response
    {

        $client = new Clients();
        $data = $request->request->all();
        $client
            ->setName($data["name"])
            ->setActivityType($data["activity_type"])
            ->setJobType($data["job_type"])
            ->setContactName($data["contact_name"])
            ->setContactEmail($data["contact_email"])
            ->setContactTel($data["contact_tel"]);


            $entityManager->persist($client);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_client_list');
    }

    // OFFERS

      #[Route('/admin/offer/list', name: 'app_admin_offer_list')]
    public function offerList(EntityManagerInterface $entityManager): Response
    {
        $offers = $entityManager->getRepository(Offers::class)->findAll();
        return $this->render('admin/offer/index.html.twig', [
            'controller_name' => 'AdminController',
            'offers' => $offers
        ]);
    }

    #[Route('/admin/offer/new', name: 'app_admin_offer_new')]
    public function newOffer(EntityManagerInterface $entityManager): Response
    {
        $jobCategory = $entityManager->getRepository(JobCategory::class)->findAll();
        $clients = $entityManager->getRepository(Clients::class)->findAll();
        // dd($jobCategory, $clients);
        return $this->render('admin/offer/new.html.twig', [
            'controller_name' => 'AdminController',
            'job_categories' => $jobCategory,
            'clients' => $clients
        ]);
    }

    #[Route('/admin/offer/save', name: 'app_admin_offer_save')]
    public function saveOffer(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offer = new Offers();
        $data = $request->request->all();

        $jobCategory = $entityManager->getRepository(JobCategory::class)->findOneBy(['id' => $data['job_category_id']]);

        $client = $entityManager->getRepository(Clients::class)->findOneBy(['id' => $data['client_id']]);

        $offer
            ->setReference($data["reference"])
            ->setDescription($data["description"])
            ->setTitle($data["title"])
            ->setType($data["type"])
            ->setLocation($data["location"])
            ->setSalary($data["salary"])
            ->setJobCategory($jobCategory)
            ->setClient($client);

            if($data['activity']){
                $offer->setActivity(true);
            } else {
                $offer->setActivity(false);
            }

            $entityManager->persist($offer);
             $entityManager->flush();

        return $this->redirectToRoute('app_admin_offer_list');
    }
}
