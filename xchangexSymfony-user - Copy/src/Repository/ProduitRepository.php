<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produit>
 *
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    public function save(Produit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Produit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

   /**
    * @return Produit[] Returns an array of Produit objects
    */
   public function findByExampleField($value): array
   {
       return $this->createQueryBuilder('p')
           ->andWhere('p.nom = :val')
           ->setParameter('val', $value)
           ->orderBy('p.id', 'ASC')
           ->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }

//    public function findOneBySomeField($value): ?Produit
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.nom = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function Sort(): array
{
    return $this->createQueryBuilder('p')
       
        
        ->orderBy('p.nom', 'ASC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult()
    ;
}

public function searchByName($searchTerm)
    {
        $qb = $this->createQueryBuilder('p');

        $qb->andWhere($qb->expr()->like('p.nom', ':searchTerm'))
            ->setParameter('searchTerm', '%'.$searchTerm.'%');

        return $qb->getQuery()->getResult();
    }
}
