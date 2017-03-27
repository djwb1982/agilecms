<?php

namespace Agile\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalog
 *
 * @ORM\Table(name="catalog")
 * @ORM\Entity
 */
class Catalog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="absolute", type="string", length=50, nullable=true)
     */
    private $absolute;

    /**
     * @var integer
     *
     * @ORM\Column(name="addtime", type="integer", nullable=true)
     */
    private $addtime;



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
     * @return Catalog
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set absolute
     *
     * @param string $absolute
     * @return Catalog
     */
    public function setAbsolute($absolute)
    {
        $this->absolute = $absolute;

        return $this;
    }

    /**
     * Get absolute
     *
     * @return string 
     */
    public function getAbsolute()
    {
        return $this->absolute;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     * @return Catalog
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer 
     */
    public function getAddtime()
    {
        return $this->addtime;
    }
}
