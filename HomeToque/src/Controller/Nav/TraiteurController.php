<?php

namespace App\Controller\Nav;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/traiteur")
 */
class TraiteurController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('nav/traiteur/index.html.twig', [
            'controller_name' => 'TraiteurController',
        ]);
    }
}
