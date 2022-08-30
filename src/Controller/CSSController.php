<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CSSController extends AbstractController
{
    #[Route('/css', name: 'app_css')]
    public function index(): Response
    {
        return $this->render('css/index.html.twig', [
            'controller_name' => 'CSSController',
        ]);
    }

// -------------------Cours-----------------------
    
 
#[Route('/css/select', name: 'app_css_select')]
public function select(): Response
{
    return $this->render('css/select.html.twig', [
        'controller_name' => 'CSSController',
    ]);
}

#[Route('/css/CoetBo', name: 'app_css_CB')]
public function CB(): Response
{
    return $this->render('css/CoetBo.html.twig', [
        'controller_name' => 'CSSController',
    ]);
}
#[Route('/css/Pense', name: 'app_css_pense')]
public function Pense(): Response
{
    return $this->render('css/Pense.html.twig', [
        'controller_name' => 'CSSController',
    ]);
}




// -------------------Exercices-----------------------


#[Route('/css/Serie1', name: 'app_css_S1')]
public function S1(): Response
{
    return $this->render('css/S2.html.twig', [
        'controller_name' => 'CSSController',
    ]);
}

#[Route('/css/Serie2', name: 'app_css_S2')]
public function S2(): Response
{
    return $this->render('css/S2.html.twig', [
        'controller_name' => 'CSSController',
    ]);
}
}



