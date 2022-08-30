<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HtmlController extends AbstractController
{
    #[Route('/html', name: 'app_html')]
    public function index(): Response
    {
        return $this->render('html/index.html.twig', [
            'controller_name' => 'HtmlController',
        ]);
    }




 // -------------------Cours-----------------------
    
 
 #[Route('/html/BC', name: 'app_html_BC')]
    public function BC(): Response
    {
        return $this->render('html/BC.html.twig', [
            'controller_name' => 'HtlmController',
        ]);
    }

    #[Route('/html/BE', name: 'app_html_BE')]
    public function BE(): Response
    {
        return $this->render('html/BE.html.twig', [
            'controller_name' => 'HtmlController',
        ]);
    }





    // -------------------Exercices-----------------------
    
    
    #[Route('/html/Serie1', name: 'app_html_S1')]
    public function S1(): Response
    {
        return $this->render('html/S2.html.twig', [
            'controller_name' => 'HtlmController',
        ]);
    }

    #[Route('/html/Serie2', name: 'app_html_S2')]
    public function S2(): Response
    {
        return $this->render('html/S2.html.twig', [
            'controller_name' => 'HtmlController',
        ]);
    }
}
