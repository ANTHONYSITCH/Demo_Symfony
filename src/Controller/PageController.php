<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_page')]
    public function index(MovieRepository $movieRepository): Response
    {
        $username =  "John";
        $age = 20;
        $movies = $movieRepository->findAll();

        return $this->render('page/index.html.twig', [
            'username' => $username,
            'age' => $age,
            'movies' => $movies,
        ]);
    }

    #[Route('/about', name:'app_about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig');
    }

    #[Route('/legal', name:'app_legal')]
    public function legal(): Response
    {
        return $this->render('page/legal.html.twig');
    }
}