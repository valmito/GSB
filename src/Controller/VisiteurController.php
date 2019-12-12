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
           
            $visiteur = $em->getRepository(Visiteur::class)->seConnecter($login,$password); //on envoie les données reçus pour tester
            
            foreach($visiteur as $result){
                if(!empty($visiteur)){ 
                    if($visiteur[0]->getLogin()==$login){ 
                        //on crée une session
                        $session = new Session();
                        $session->set('nom', $visiteur[0]->getNom());
                        $session->set('prenom', $visiteur[0]->getPrenom());  
                        $login = $session->set('login', $login);  
                        return $this->render('Menu.html.twig');           
                    }          
                }    
    }
    }
    return $this->render('visiteur/ConnexionV.html.twig',array('form'=>$form->createView(),));

}
}
