<?php

namespace App\Repository;

use App\Entity\Map;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Map>
 */
class MapRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Map::class);
    }

    /**
     * Trouver toutes les maps par mode de jeu
     */
    public function findByMode(string $mode): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.mode = :mode')
            ->setParameter('mode', $mode)
            ->orderBy('m.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouver les maps par localisation
     */
    public function findByLocation(string $location): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.location LIKE :location')
            ->setParameter('location', '%' . $location . '%')
            ->orderBy('m.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}