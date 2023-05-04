<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Candidates;
use App\Entity\JobCategory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use App\Entity\User;

class CandidatesController extends AbstractController
{
    #[Route('/save/{id}', name: 'app_candidates_save', methods: ['GET', 'POST' ])]
    public function save(Request $request, EntityManagerInterface $entityManager, Security $security, User $user): Response
    {

        $candidates = $entityManager->getRepository(Candidates::class)->findOneBy(['user' => $user->getId()]);

        // If the candidate doesn't exist, create a new one
        if (!$candidates) {
            $candidates = new Candidates();
        }

        $data = $request->request->all();
        $jobcategory = $entityManager->getRepository(JobCategory::class)->find($data["job_category"]);
        $user = $security->getUser();


        $candidates
            ->setGender($data["gender"])
            ->setFirstname($data["firstname"])
            ->setLastname($data["lastname"])
            ->setAddress($data["address"])
            ->setCountry($data["country"])
            ->setNationality($data["nationality"])
            ->setCurrentLocation($data["current_location"])
            ->setBirthLocation($data["birth_location"])
            ->setExperience($data["experience"])
            ->setJobCategory($jobcategory)
            ->setShortDescription($data["short_description"])
            ->setUser($user);

            $dateString = $request->request->get('birthdate');
            if ($dateString) {
                $birthdate = new \DateTimeImmutable($dateString);
                $candidates->setBirthdate($birthdate);
            }
        $entityManager->persist($candidates);
        $entityManager->flush();

        return $this->redirectToRoute('app_profile', ['id' => $candidates->getUser()->getId()]);
    }


    #[Route('/profile/{id}', name: 'app_profile', methods: ['GET', 'POST' ])]
    public function profile(User $user, EntityManagerInterface $entityManager): Response
    {
        // Get the existing candidate for the user, if it exists
        $candidates = $entityManager->getRepository(Candidates::class)->findOneBy(['user' => $user->getId()]);

        // If the candidate doesn't exist, create a new one
        if (!$candidates) {
            $candidates = new Candidates();
        }
        
        $jobCategory = $entityManager->getRepository(JobCategory::class)->findAll();

        // dd($candidates);
        return $this->render('candidates/profile.html.twig', [
            'controller_name' => 'HomeController',
            'job_category' => $jobCategory,
            'candidates' => $candidates
        ]);
    }
}
