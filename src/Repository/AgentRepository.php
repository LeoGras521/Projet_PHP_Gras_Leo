<?php

namespace App\Repository;

use App\Entity\Agent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Agent>
 */
class AgentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Agent::class);
    }

    /**
     * Trouver tous les agents par rôle
     */
    public function findByRole(string $role): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.role = :role')
            ->setParameter('role', $role)
            ->orderBy('a.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouver les agents par vitesse
     */
    public function findBySpeed(int $speed): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.speed = :speed')
            ->setParameter('speed', $speed)
            ->orderBy('a.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}