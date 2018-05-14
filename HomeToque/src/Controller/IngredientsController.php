<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IngredientsController extends Controller
{
    /**
     * @Route("/ingredients", name="ingredients")
     */
    public function index()
    {
        return $this->render('ingredients/index.html.twig', [
            'controller_name' => 'IngredientsController',
        ]);
    }
}
