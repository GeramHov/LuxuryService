<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/company', name: 'app_company')]
    public function company(): Response
    {
        return $this->render('home/company.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/jobs-index', name: 'app_jobs_index')]
    public function jobIndex(): Response
    {
        return $this->render('home/jobs-index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/show-index', name: 'app_show_index')]
    public function showIndex(): Response
    {
        return $this->render('home/show-index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    // #[Route('/admin', name: 'app_admin')]
    // public function admin(): Response
    // {
    //     return $this->render('admin/admin.twig', [
    //         'controller_name' => 'HomeController',
    //     ]);
    // }

    // #[Route('/log-in', name: 'app_log-in')]
    // public function logIn(): Response
    // {
    //     return $this->render('login/login.html.twig', [
    //         'controller_name' => 'HomeController',
    //     ]);
    // }
}