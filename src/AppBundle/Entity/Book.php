<?php

/**
 * Book
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
 * Book
 *
 * @category                                                          Test
 * @package                                                           Test
 * @author                                                            Test <test@test.com>
 * @license                                                           test https://www.test.com
 * @link                                                              Test
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookRepository")
 */
class Book
{
    /**
     * L'id
     *
     * @var int
     *
     * @ORM\Column(name="id",               type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $_id;

    /**
     * Le titre
     *
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $_titre;


    /**
     * L'état
     * 
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", options={"default":true})
     */
    private $_etat;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre titre
     *
     * @return Book
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set etat
     *
     * @param boolean $etat l'état
     *
     * @return Book
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
