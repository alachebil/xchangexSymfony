<?php

namespace App\Repository;

use App\Entity\Echange;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Echange>
 *
 * @method Echange|null find($id, $lockMode = null, $lockVersion = null)
 * @method Echange|null findOneBy(array $criteria, array $orderBy = null)
 * @method Echange[]    findAll()
 * @method Echange[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EchangeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Echange::class);
    }

    public function save(Echange $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Echange $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Echange[] Returns an array of Echange objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Echange
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function SortByUsername(){
    return $this->createQueryBuilder('e')
        ->orderBy('e.username','ASC')
        ->getQuery()
        ->getResult()
        ;
}

public function SortByDateEchange()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.dateEchange','ASC')
        ->getQuery()
        ->getResult()
        ;
}


public function SortByLieuEchange()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.lieuEchange','ASC')
        ->getQuery()
        ->getResult()
        ;
}


public function SortByTypeEchange()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.typeEchange','ASC')
        ->getQuery()
        ->getResult()
        ;
}

public function findByUsername( $username)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.username LIKE :username')
        ->setParameter('username','%' .$username. '%')
        ->getQuery()
        ->execute();
}
public function findByDateEchange( $dateEchange)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.dateEchange LIKE :dateEchange')
        ->setParameter('dateEchange','%' .$dateEchange. '%')
        ->getQuery()
        ->execute();
}
public function findByLieuEchange( $lieuEchange)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.lieuEchange LIKE :lieuEchange')
        ->setParameter('lieuEchange','%' .$lieuEchange. '%')
        ->getQuery()
        ->execute();
}
public function findByTypeEchange( $typeEchange)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.typeEchange LIKE :typeEchange')
        ->setParameter('typeEchange','%' .$typeEchange. '%')
        ->getQuery()
        ->execute();
}
}
