<?php
/**
 * MyClass Class Doc Comment
 *
 * @category Test
 * @package  Test
 * @author   Test <test@test.com>
 * @license  test https://www.test.com
 * @link     Test
 */
namespace AppBundle\Repository;

/**
 * MyClass Class Doc Comment
 *
 * @category Test
 * @package  Test
 * @author   Test <test@test.com>
 * @license  test https://www.test.com
 * @link     Test
 */
class BookRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * MyClass Class Doc Comment
     *
     * @return array
     */
    public function getid5()
    {
        return $this->getEntityManager()->createQuery(
            'SELECT p FROM AppBundle:Product p ORDER BY p.name ASC'
        )
            ->getResult();
    }

    /**
     * MyClass Class Doc Comment
     *
     * @param string $titre c'est le titre
     *
     * @return array
     */
    public function findByTitre($titre)
    {
        return $this->getEntityManager()->createQuery(
            'SELECT * FROM AppBundle:Book b WHERE titre like "%'.$titre.'%" ORDER BY b.titre ASC'
        )
            ->getResult();
    }
}
