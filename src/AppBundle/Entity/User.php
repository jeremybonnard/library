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

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class user
 *
 * @category Test
 * @package  Test
 * @author   Test <test@test.com>
 * @license  test https://www.test.com
 * @link     Test
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends \FOS\UserBundle\Model\User
{
    /**
     * Id
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Getclass
     *
     * @return string
     */
    public function getClass()
    {
        return 'AppBundle\Entity\User';
    }
}