<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Visiteur;
use App\Entity\FicheFrais;
use App\Controller\FicheFraisController;
use App\Form\VisiteurType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class VisiteurController extends AbstractController // extends \Doctrine\ORM\EntityRepository

{
    /**
     * @Route("/visiteur", name="visiteur")
     */
    public function index()
    {
        return $this->render('visiteur/index.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    /**
     * @Route("/visiteur/seConnecter", name="visiteur_connect")
     */
    
    public function connectionVisiteur(Request $query)
    {
        $visiteur = new Visiteur;
        $form = $this->createForm(VisiteurType::class, $visiteur);
        $form->handleRequest($query);
    if ($form->isSubmitted() && $form->isValid()) {
       
            $em = $this->getDoctrine()->getManager();
            $data = $form->getData();      
           
            $login = $form['login']->getData();
            $password = $form['mdp']->getData();
           
            $result = $em->getRepository(Visiteur::class)->seConnecter($login,$password); //on envoie les données reçus pour tester

            if(!empty($result)){ 
                $session = new Session();
                $login = $session->set('login', $login);
                
                return $this->redirectToRoute('/fiche/frais/afficher');            
            }    
    }
    return $this->render('visiteur/ConnexionV.html.twig',array('form'=>$form->createView(),));
}

}
