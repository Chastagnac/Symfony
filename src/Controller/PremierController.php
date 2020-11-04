<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class PremierController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return new Response($content = 'Bonjour mon premier controleur'); 
    }
}
