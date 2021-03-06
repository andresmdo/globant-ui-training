<?php

namespace Coffee\ApiBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ShopRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ShopRepository extends EntityRepository
{

    /**
     * @return array
     */
    public function findAllOrderedByName()
	{
		return $this->getEntityManager()
		->createQuery(
				'SELECT s FROM CoffeApiBundle:Shop s ORDER BY s.name ASC'
		)
		->getResult();
	}

    /**
     * @return array
     */
    public function findAllAsArray()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT s FROM CoffeeApiBundle:Shop s')
            ->getArrayResult();
    }
	
}
