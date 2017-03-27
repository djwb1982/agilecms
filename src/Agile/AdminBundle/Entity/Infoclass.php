<?php

namespace Agile\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infoclass
 *
 * @ORM\Table(name="infoclass")
 * @ORM\Entity
 */
class Infoclass
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
     * @var integer
     *
     * @ORM\Column(name="bigclassid", type="integer", nullable=true)
     */
    private $bigclassid;

    /**
     * @var string
     *
     * @ORM\Column(name="bigclassname", type="string", length=50, nullable=true)
     */
    private $bigclassname;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="catalogid", type="integer", nullable=true)
     */
    private $catalogid;

    /**
     * @var string
     *
     * @ORM\Column(name="catalog", type="string", length=255, nullable=true)
     */
    private $catalog;

    /**
     * @var integer
     *
     * @ORM\Column(name="addupdate", type="integer", nullable=true)
     */
    private $addupdate;



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
     * Set bigclassid
     *
     * @param integer $bigclassid
     * @return Infoclass
     */
    public function setBigclassid($bigclassid)
    {
        $this->bigclassid = $bigclassid;

        return $this;
    }

    /**
     * Get bigclassid
     *
     * @return integer 
     */
    public function getBigclassid()
    {
        return $this->bigclassid;
    }

    /**
     * Set bigclassname
     *
     * @param string $bigclassname
     * @return Infoclass
     */
    public function setBigclassname($bigclassname)
    {
        $this->bigclassname = $bigclassname;

        return $this;
    }

    /**
     * Get bigclassname
     *
     * @return string 
     */
    public function getBigclassname()
    {
        return $this->bigclassname;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Infoclass
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
     * Set catalogid
     *
     * @param integer $catalogid
     * @return Infoclass
     */
    public function setCatalogid($catalogid)
    {
        $this->catalogid = $catalogid;

        return $this;
    }

    /**
     * Get catalogid
     *
     * @return integer 
     */
    public function getCatalogid()
    {
        return $this->catalogid;
    }

    /**
     * Set catalog
     *
     * @param string $catalog
     * @return Infoclass
     */
    public function setCatalog($catalog)
    {
        $this->catalog = $catalog;

        return $this;
    }

    /**
     * Get catalog
     *
     * @return string 
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * Set addupdate
     *
     * @param integer $addupdate
     * @return Infoclass
     */
    public function setAddupdate($addupdate)
    {
        $this->addupdate = $addupdate;

        return $this;
    }

    /**
     * Get addupdate
     *
     * @return integer 
     */
    public function getAddupdate()
    {
        return $this->addupdate;
    }
}
