<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Comptable;
use App\Controller\FicheFraisController;
use App\Form\ComptableType;

class ComptableController extends AbstractController
{
    /**
     * @Route("/comptable", name="comptable")
     */
    public function index()
    {
        return $this->render('comptable/index.html.twig', [
            'controller_name' => 'ComptableController',
        ]);
    }
     /**
     * @Route("/comptable/seConnecter", name="comptable/seConnecter")
     */
    public function creerFormConnexionAction(Request $query) {

        // On crée un objet Visiteur
        $comptable = new Comptable();

        $form = $this->createForm(ComptableType::class, $comptable);

        //$request = Request::createFromGlobals();

        $form->handleRequest($query);
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $visiteur contient les valeurs entrées dans le formulaire par le candidat

        if ($form->isSubmitted() && $form->isValid()) {

          // On vérifie que les valeurs entrées sont correctes (Nous verrons la validation des objets en détail dans le prochain chapitre)
            // On enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $data = $form->getData();      

                $login = $form['login']->getData();
                $password = $form['mdp']->getData();

                $result = $em->getRepository(comptable::class)->seConnecter($login,$password); //on envoie les données reçus pour tester

                if(!empty($result)){ //on teste si le user existe ou pas !!
                    //on crée une session
                    $session = new Session();
                    $login = $session->set('login', $login);  
                    return $this->redirectToRoute('afficherFicheFrais');            
                }    
        }
        return $this->render('comptable/Connexion.html.twig',array('form'=>$form->createView(),));
    }     
}