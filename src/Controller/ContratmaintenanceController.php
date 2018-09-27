<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContratmaintenanceController extends AbstractController
{
    /**
     * @Route("/contratmaintenance", name="contratmaintenance")
     */
    public function index()
    {
        return $this->render('contratmaintenance/index.html.twig', [
            'controller_name' => 'ContratmaintenanceController',
        ]);
    }
}
