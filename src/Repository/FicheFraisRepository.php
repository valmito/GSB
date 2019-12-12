<?php

namespace App\Repository;

use App\Entity\FicheFrais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
/**
 * @method FicheFrais|null find($id, $lockMode = null, $lockVersion = null)
 * @method FicheFrais|null findOneBy(array $criteria, array $orderBy = null)
 * @method FicheFrais[]    findAll()
 * @method FicheFrais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheFraisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FicheFrais::class);
    }

    // /**
    //  * @return FicheFrais[] Returns an array of FicheFrais objects
    //  */
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->where('f.mois= :mois')
            ->setParameter('mois', $value)
            ->getQuery()
            ->getResult()
        ;
    }

    
    public function findOneBySomeField($value): ?FicheFrais
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.mois= :mois')
            ->setParameter('mois', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    
    /*
    public function TrouverFicheFraisDuMois($date)
    {
        
        $queryBuilder =$this->createQueryBuilder('fi')
            ->select('fi')
            ->from($this->_entityName,'fi');
        $query = $this->_em->createQuery('SELECT * FROM App\Entity\FicheFrais JOIN c.address');
        $result =  $query->getQuery()->getResult();
        return $result;
        $queryBuilder = $this->_em->createQueryBuilder()
            ->select('c')
            ->from($this->_entityName, 'c')
            ->where('c.mois= :mois')
            ->setParameter('mois', $date);
        $result =  $queryBuilder->getQuery()->getResult();
        return $result;
        $query = $this->_em->createQuery('SELECT u FROM '.FicheFrais::class.' u WHERE u.mois ='.$date);
        return $query->getResult();
        }
        */
    }
