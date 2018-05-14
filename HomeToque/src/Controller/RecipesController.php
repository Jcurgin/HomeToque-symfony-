<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecipesController extends Controller
{
    /**
     * @Route("/recipes", name="recipes")
     */
    public function index()
    {
        return $this->render('recipes/index.html.twig', [
            'controller_name' => 'RecipesController',
        ]);
    }
}
