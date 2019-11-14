<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\Query\AST\Join;
use App\Entity\FicheFrais;
use App\Entity\Comptable;
use App\Form\FicheFraisType;

class FicheFraisController extends AbstractController{
    /**
     * @Route("/fiche/frais", name="fiche_frais")
     */
    public function index()
    {
        return $this->render('fiche_frais/index.html.twig', [
            'controller_name' => 'FicheFraisController',
        ]);
    }
    /**
     * @Route("/fiche/frais/creerFiche", name="creerFicheFrais")
     */
    public function creerFiche(Request $query) {

        $FicheFrais = new FicheFrais();

        $form = $this->createForm(FicheFraisType::class, $FicheFrais);

        $form->handleRequest($query);
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire

        if ($form->isSubmitted() && $form->isValid()) {

          // On vérifie que les valeurs entrées sont correctes (Nous verrons la validation des objets en détail dans le prochain chapitre)

          // On enregistre notre objet $advert dans la base de données, par exemple

            $em = $this->getDoctrine()->getManager();
            $em->persist($FicheFrais);
            $em->flush();    

            $query->getSession()
                  ->getFlashBag()
                  ->add('success','Fiche ajouté avec succès');

            return $this->redirectToRoute('creerFicheFrais');
        }
         return $this->render('fiche_frais/Creer.html.twig',array('form'=>$form->createView()));    
    }
    /**
     * @Route("/fiche/frais/valider", name="validerFicheFrais")
     */
    public function validerFiche(Request $query) {

        $FicheFrais = new FicheFrais();

        $form = $this->createForm(FicheFraisType::class, $FicheFrais);

        $form->handleRequest($query);
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire

        if ($form->isSubmitted() && $form->isValid()) {

          // On vérifie que les valeurs entrées sont correctes (Nous verrons la validation des objets en détail dans le prochain chapitre)

          // On enregistre notre objet $advert dans la base de données, par exemple

            $em = $this->getDoctrine()->getManager();
            $em->persist($FicheFrais);
            $em->flush();    

            $query->getSession()
                  ->getFlashBag()
                  ->add('success','Fiche validé avec succès');

            return $this->redirectToRoute('validerFicheFrais');
        }
         return $this->render('fiche_frais/ValiderFrais.html.twig',array('form'=>$form->createView()));    
    }
    /**
      * @Route("/fiche/frais/afficher", name="afficherFicheFrais")
      */
     
    public function AfficherFicheFrais(){
        
        $em = $this->getDoctrine()->getManager();
        $Fiche = $em->getRepository(FicheFrais::class)->findAll();    
        return $this->render('fiche_frais/Afficher.html.twig',array('Fiche'=>$Fiche));
    }
     
     /**
      *
      *@Route("/fiche/frais/update/{id}",name="upd_route")
      *
      */    
     public function updateAction(Request $request, Session $session, $id){
         
        $article = new Article() ;
        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->getUnArticle($id);
       
        //$id = $session->get('login');
        $request->getSession()->getFlashBag()->add('notice', '');
       
        $form = $this->createForm(ArticleType::class, $article);
       
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', 'Article modifié avec succès.');
                return $this->redirectToRoute('upd_route',array('id'=>$id));
            }
        }
        return $this->render( 'article/update.html.twig', array(
            'form' =>$form->createView(), 'article'=>$article));
    }
   
    /**
      *
      *@Route("/article/update/register",name="r_register")
      *
      */
    public function  register(){
        return $this->render("article/register.html.twig");
    }

    /**
      *
      *@Route("/fiche/frais/verif/supprimer/{id}",name="verif_del_art")
      *
      */
   
    public function deleteVerif(Session $session, $id){
        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->getUnArticle($id);
        return $this->render('article/delete.html.twig', array('article'=>$article));
    }
   
    /**
      *
      *@Route("/article/supprimer/{id}",name="del_art")
      *
      */
    public function deleterArticle(Session $session, $id){

        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->getUnArticle($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();
        return $this->redirectToRoute('affichage_final');
    }
    /**
      *
      *@Route("/article/afficher",name="affichage_final")
      *
      */
    public function indexAction(Session $session){
        $id = $session->get('id');
        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->findAllArt();
        return $this->render('article/index.html.twig', array('articles'=>$article));
    }
}