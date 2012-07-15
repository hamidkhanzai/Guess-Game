<?php

namespace Acme\SepaBlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\SepaBlogBundle\Entity\Visitors
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Visitors
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer $first
     *
     * @ORM\Column(name="first", type="integer")
     */
    private $first;

    /**
     * @var integer $second
     *
     * @ORM\Column(name="second", type="integer")
     */
    private $second;

    /**
     * @var integer $third
     *
     * @ORM\Column(name="third", type="integer")
     */
    private $third;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set first
     *
     * @param integer $first
     */
    public function setFirst($first)
    {
        $this->first = $first;
    }

    /**
     * Get first
     *
     * @return integer 
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Set second
     *
     * @param integer $second
     */
    public function setSecond($second)
    {
        $this->second = $second;
    }

    /**
     * Get second
     *
     * @return integer 
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Set third
     *
     * @param integer $third
     */
    public function setThird($third)
    {
        $this->third = $third;
    }

    /**
     * Get third
     *
     * @return integer 
     */
    public function getThird()
    {
        return $this->third;
    }
}