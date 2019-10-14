<?php

namespace App\Repository;

use App\Entity\Comptable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Comptable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comptable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comptable[]    findAll()
 * @method Comptable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComptableRepository extends ServiceEntityRepository// extends \Doctrine\ORM\EntityRepository
{
    public function __construct(ManagerRegistry $registry){
        parent::__construct($registry,Comptable::class);
        
    }
    public function SeConnecter($login, $password) {
            $queryBuilder = $this->_em->createQueryBuilder()
            ->select('c')
            ->from($this->_entityName, 'c')
            ->where('c.login = :login')
            ->andWhere('c.mdp = :mdp')
            ->setParameter('login',$login)
            ->setParameter('mdp', $password);

           $result =  $queryBuilder->getQuery()->getResult();

        return $result;
    }
}
    