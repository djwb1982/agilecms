<?php

namespace Agile\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 *
 * @ORM\Table(name="content")
 * @ORM\Entity
 */
class Content
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="coverimg", type="string", length=255, nullable=true)
     */
    private $coverimg;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="text", length=65535, nullable=true)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=true)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255, nullable=true)
     */
    private $class;

    /**
     * @var integer
     *
     * @ORM\Column(name="classid", type="integer", nullable=true)
     */
    private $classid;

    /**
     * @var string
     *
     * @ORM\Column(name="catalog", type="string", length=255, nullable=true)
     */
    private $catalog;



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
     * Set title
     *
     * @param string $title
     * @return Content
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Content
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set coverimg
     *
     * @param string $coverimg
     * @return Content
     */
    public function setCoverimg($coverimg)
    {
        $this->coverimg = $coverimg;

        return $this;
    }

    /**
     * Get coverimg
     *
     * @return string 
     */
    public function getCoverimg()
    {
        return $this->coverimg;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Content
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Content
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return Content
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set classid
     *
     * @param integer $classid
     * @return Content
     */
    public function setClassid($classid)
    {
        $this->classid = $classid;

        return $this;
    }

    /**
     * Get classid
     *
     * @return integer 
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * Set catalog
     *
     * @param string $catalog
     * @return Content
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
}
