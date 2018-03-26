<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Formation Repository
 **/
 class FormationRepository extends EntityRepository
 {
    /**
     * Find...
     **/ 
    public function FindAllFormations()
    {
        $qBuilder->$this
            ->getEntityManager()
            ->createQueryBuilder();
        $qBuilder->select('f');
        $qBuilder->from('AppBundle:Formation', 'f');
        
        $result = $qBuilder->getQuery()->getResult();
        return $result;
    }
 }