<?php

namespace App\Repository;

use App\Entity\Service;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Service>
 *
 * @method Service|null find($id, $lockMode = null, $lockVersion = null)
 * @method Service|null findOneBy(array $criteria, array $orderBy = null)
 * @method Service[]    findAll()
 * @method Service[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Service::class);
    }

    public function save(Service $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Service $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Service[] Returns an array of Service objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Service
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function SortBytitreService(){
    return $this->createQueryBuilder('e')
        ->orderBy('e.titreService','ASC')
        ->getQuery()
        ->getResult()
        ;
}

public function SortBydescriptionService()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.descriptionService','ASC')
        ->getQuery()
        ->getResult()
        ;
}


public function SortBylieuService()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.lieuService','ASC')
        ->getQuery()
        ->getResult()
        ;
}




public function findBytitreService( $titreService)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.titreService LIKE :titreService')
        ->setParameter('titreService','%' .$titreService. '%')
        ->getQuery()
        ->execute();
}
public function findBydescriptionService( $descriptionService)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.descriptionService LIKE :descriptionService')
        ->setParameter('descriptionService','%' .$descriptionService. '%')
        ->getQuery()
        ->execute();
}

public function findBylieuService( $lieuService)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.lieuService LIKE :lieuService')
        ->setParameter('lieuService','%' .$lieuService. '%')
        ->getQuery()
        ->execute();
}


}
