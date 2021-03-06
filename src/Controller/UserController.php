<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    /**
     * @Route("/", name="Accueil")
     */
    public function seConnecter()
    {
        return $this->render('user/Accueil.html.twig');
    }
    public function AllerAuMenu()
    {
        return $this->render('Menu.html.twig');
    }
    public function seDeconnecter()
    {
        return $this->render('user/Accueil.html.twig');
    }
}
