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
use App\Entity\FraisForfait;
use App\Entity\LigneFraisHorsForfait;
use App\Form\FicheFraisType;
use App\Form\ValiderFicheType;
use App\Form\LigneFraisHorsForfaitType;
use App\Repository\LigneFraisForfait;

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
        
        $LigneFraisHorsForfait = new LigneFraisHorsForfait();
        $form2 = $this->createForm(LigneFraisHorsForfaitType::class, $LigneFraisHorsForfait);
        $form2->handleRequest($query);
        if($form->get('valider')->isClicked()){  
            if ($form->isSubmitted() && $form->isValid()) {
                $fi = $this->getDoctrine()->getManager();
                $fi->persist($FicheFrais);
                $fi->flush();
                $query->getSession()
                      ->getFlashBag()
                      ->add('success','Fiche ajouté avec succès');
        }
            if ($form2->isSubmitted() && $form2->isValid()){
                $lfh = $this->getDoctrine()->getManager();
                $lfh->persist($LigneFraisHorsForfait );
                $lfh->flush();

                $query->getSession()
                      ->getFlashBag()
                      ->add('success','Fiche ajouté avec succès');
        }
            if (isset($_POST["midi"]) && isset($_POST["nuit"]) && isset($_POST["etape"]) && isset($_POST["km"])){
                $midi=$_POST["midi"];
                $nuit=$_POST["nuit"];
                $etape=$_POST["etape"];
                $km=$_POST["km"];
                RajouterUneLigne($value,$value2,$value3,$value4);
            }
        return $this->redirectToRoute('afficherFicheFrais');
        }
        $jour=date('Y-m');
        return $this->render('fiche_frais/Creer.html.twig',array('form'=>$form->createView(),'jour'=>$jour,'form2'=>$form2->createView()));    
        }
    
    /**
     * @Route("/fiche/frais/valider", name="validerFicheFrais")
     */
    public function validerFiche(Request $query) {

        $FicheFrais = new FicheFrais();
        $form = $this->createForm(ValiderFicheType::class, $FicheFrais);

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
        $em = $this->getDoctrine()->getManager();
        $jour=date('m');
        $Fiche = $em->getRepository(FicheFrais::class)->findByExampleField($jour);
        return $this->render('fiche_frais/ValiderFrais.html.twig',array('form'=>$form->createView(),'jour'=>$jour,'Fiche'=>$Fiche));    
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
         
        $FicheFrais = new FicheFrais() ;
        $FicheFrais = $this->getDoctrine()->getManager()->getRepository(FicheFrais::class)->getUneUnArticle($id);
       
        //$id = $session->get('login');
        $request->getSession()->getFlashBag()->add('notice', '');
       
        $form = $this->createForm(FicheFraisType::class, $FicheFrais);
       
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', 'Fiche Frais modifié avec succès.');
                return $this->redirectToRoute('afficherFicheFrais',array('id'=>$id));
            }
        }
        return $this->render( 'fiche_frais/Update.html.twig', array('form' =>$form->createView(), 'article'=>$article));
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
      *@Route("/fiche/frais/supprimer/{id}",name="del_art")
      *
      */
    public function deleterFicheFrais(Session $session, $id){

        $FicheFrais = $this->getDoctrine()->getManager()->getRepository(FicheFrais::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($FicheFrais);
        $em->flush();
        return $this->redirectToRoute('afficherFicheFrais');
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