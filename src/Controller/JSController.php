<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JSController extends AbstractController
{
    #[Route('/js', name: 'app_js')]
    public function index(): Response
    {
        return $this->render('js/index.html.twig', [
            'controller_name' => 'JSController',
        ]);
    }
// -----------------------------------------COURS----------------------------------------------------

#[Route('/js/algo', name: 'app_js_algo')]
public function algo(): Response
{
    return $this->render('js/algo.html.twig', [
        'controller_name' => 'JSController',
    ]);
}
#[Route('/js/function', name: 'app_js_function')]
public function function(): Response
{
    return $this->render('js/function.html.twig', [
        'controller_name' => 'JSController',
    ]);
}



// -----------------------------------------EXERCICES-------------------------------------------------
    #[Route('/js/algorithme', name: 'app_js_algorithme')]
    public function algorithme(): Response
    {
        return $this->render('js/algorithme.html.twig', [
            'controller_name' => 'JSController',
        ]);
    }

    #[Route('/js/jquery', name: 'app_js_jquery')]
    public function jquery(): Response
    {
        return $this->render('js/jquery.html.twig', [
            'controller_name' => 'JSController',
        ]);
    }
}
