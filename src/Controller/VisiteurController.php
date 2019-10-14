<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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
    public function SeConnecter($login, $password) {
            $queryBuilder = $this->_em->createQueryBuilder()
            ->select('v')
            ->from($this->_entityName, 'v')
            ->where('v.login = :login')
            ->andWhere('v.password = :mdp')
            ->setParameter('login',$login)
            ->setParameter('mdp', $password);

           $result =  $queryBuilder->getQuery()->getResult();

        return $result;
    }


}
