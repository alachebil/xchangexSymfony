<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    public function save(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Reclamation[] Returns an array of Reclamation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reclamation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function SortByIdEchange(){
    return $this->createQueryBuilder('e')
        ->orderBy('e.idEchange','ASC')
        ->getQuery()
        ->getResult()
        ;
}

public function SortBynote(){
    return $this->createQueryBuilder('e')
        ->orderBy('e.note','ASC')
        ->getQuery()
        ->getResult()
        ;
}

public function SortByetatRec(){
    return $this->createQueryBuilder('e')
        ->orderBy('e.etatRec','ASC')
        ->getQuery()
        ->getResult()
        ;
}

public function SortBydateReclamation()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.dateReclamation','ASC')
        ->getQuery()
        ->getResult()
        ;
}


public function SortBydescriptionReclamation()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.descriptionReclamation','ASC')
        ->getQuery()
        ->getResult()
        ;
}







public function findByIdEchange( $idEchange)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.idEchange LIKE :idEchange')
        ->setParameter('idEchange','%' .$idEchange. '%')
        ->getQuery()
        ->execute();
}
public function findBynote( $note)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.note LIKE :note')
        ->setParameter('note','%' .$note. '%')
        ->getQuery()
        ->execute();
}
public function findByetatRec( $etatRec)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.etatRec LIKE :etatRec')
        ->setParameter('etatRec','%' .$etatRec. '%')
        ->getQuery()
        ->execute();
}
public function findBydateReclamation( $dateReclamation)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.dateReclamation LIKE :dateReclamation')
        ->setParameter('dateReclamation','%' .$dateReclamation. '%')
        ->getQuery()
        ->execute();
}
public function findBydescriptionReclamation( $descriptionReclamation)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.descriptionReclamation LIKE :descriptionReclamation')
        ->setParameter('descriptionReclamation','%' .$descriptionReclamation. '%')
        ->getQuery()
        ->execute();
}


}
