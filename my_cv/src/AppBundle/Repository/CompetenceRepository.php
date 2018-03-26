<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Competence Repository
 **/
 class CompetenceRepository extends EntityRepository
 {
    /**
     * Find...
     **/ 
    public function FindAllCompetences()
    {
        $qBuilder->$this
            ->getEntityManager()
            ->createQueryBuilder();
        $qBuilder->select('f');
        $qBuilder->from('AppBundle:Competence', 'f');
        
        $result = $qBuilder->getQuery()->getResult();
        return $result;
    }
 }