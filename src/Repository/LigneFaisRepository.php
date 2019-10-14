<?php

namespace App\Repository;

use App\Entity\LigneFais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LigneFais|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigneFais|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigneFais[]    findAll()
 * @method LigneFais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneFaisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LigneFais::class);
    }

    // /**
    //  * @return LigneFais[] Returns an array of LigneFais objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LigneFais
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
