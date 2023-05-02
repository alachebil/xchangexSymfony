<?php

namespace App\Repository;

use App\Entity\Livraison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Livraison>
 *
 * @method Livraison|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livraison|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livraison[]    findAll()
 * @method Livraison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivraisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livraison::class);
    }

    public function save(Livraison $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Livraison $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Livraison[] Returns an array of Livraison objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Livraison
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function SortBytype_liv(){
    return $this->createQueryBuilder('e')
        ->orderBy('e.typeLiv','ASC')
        ->getQuery()
        ->getResult()
        ;
}

public function SortByadress_liv()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.adressLiv','ASC')
        ->getQuery()
        ->getResult()
        ;
}


public function SortByproduit()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.produit','ASC')
        ->getQuery()
        ->getResult()
        ;
}








public function findByproduitlivraison( $produit)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.produit LIKE :produit')
        ->setParameter('produit','%' .$produit. '%')
        ->getQuery()
        ->execute();
}
public function findBytypeLiv( $typeLiv)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.typeLiv LIKE :typeLiv')
        ->setParameter('typeLiv','%' .$typeLiv. '%')
        ->getQuery()
        ->execute();
}
public function findByadressLiv( $adressLiv)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.adressLiv LIKE :adressLiv')
        ->setParameter('adressLiv','%' .$adressLiv. '%')
        ->getQuery()
        ->execute();
}


}
