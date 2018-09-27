<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PileetbatteriesController extends AbstractController
{
    /**
     * @Route("/pileetbatteries", name="pileetbatteries")
     */
    public function index()
    {
        return $this->render('pileetbatteries/index.html.twig', [
            'controller_name' => 'PileetbatteriesController',
        ]);
    }
}
