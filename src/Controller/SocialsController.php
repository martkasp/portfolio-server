<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SocialsController extends AbstractController
{
    /**
     * @Route("/socials", name="socials")
     */
    public function index()
    {
        return $this->render('socials/index.html.twig', [
            'controller_name' => 'SocialsController',
        ]);
    }
}
