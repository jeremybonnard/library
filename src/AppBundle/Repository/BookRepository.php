<?php

namespace AppBundle\Repository;

/**
 * BookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BookRepository extends \Doctrine\ORM\EntityRepository
{
    public function getid5()
    {
        return $this->getEntityManager()->createQuery(
            'SELECT p FROM AppBundle:Product p ORDER BY p.name ASC'
        )
            ->getResult();
    }
}
