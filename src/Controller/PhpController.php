<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhpController extends AbstractController
{
    #[Route('/php', name: 'app_php')]
    public function index(): Response
    {
        return $this->render('php/index.html.twig', [
            'controller_name' => 'PhpController',
        ]);
    }

    #[Route('/php/tableau', name: 'app_tableau')]
    public function tableau(): Response
    {
        return $this->render('php/tableau.html.twig', [
            'controller_name' => 'PhpController',
        ]);
    }

    #[Route('/php/function', name: 'app_function')]
    public function function(): Response
    {
        return $this->render('php/function.html.twig', [
            'controller_name' => 'PhpController',
        ]);
    }
}
