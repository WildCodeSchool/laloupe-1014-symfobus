<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateFieldType[string]:;

    /**
     * @var string
     */
    private $titleFieldType[string]:String;

    /**
     * @var string
     */
    private $authorFieldType[string]:;

    /**
     * @var string
     */
    private $contentFieldType[string]:;


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
     * Set dateFieldType[string]:
     *
     * @param \DateTime $dateFieldType[string]:
     * @return User
     */
    public function setDateFieldType[string]:($dateFieldType[string]:)
    {
        $this->dateFieldType[string]: = $dateFieldType[string]:;

        return $this;
    }

    /**
     * Get dateFieldType[string]:
     *
     * @return \DateTime 
     */
    public function getDateFieldType[string]:()
    {
        return $this->dateFieldType[string]:;
    }

    /**
     * Set titleFieldType[string]:String
     *
     * @param string $titleFieldType[string]:String
     * @return User
     */
    public function setTitleFieldType[string]:String($titleFieldType[string]:String)
    {
        $this->titleFieldType[string]:String = $titleFieldType[string]:String;

        return $this;
    }

    /**
     * Get titleFieldType[string]:String
     *
     * @return string 
     */
    public function getTitleFieldType[string]:String()
    {
        return $this->titleFieldType[string]:String;
    }

    /**
     * Set authorFieldType[string]:
     *
     * @param string $authorFieldType[string]:
     * @return User
     */
    public function setAuthorFieldType[string]:($authorFieldType[string]:)
    {
        $this->authorFieldType[string]: = $authorFieldType[string]:;

        return $this;
    }

    /**
     * Get authorFieldType[string]:
     *
     * @return string 
     */
    public function getAuthorFieldType[string]:()
    {
        return $this->authorFieldType[string]:;
    }

    /**
     * Set contentFieldType[string]:
     *
     * @param string $contentFieldType[string]:
     * @return User
     */
    public function setContentFieldType[string]:($contentFieldType[string]:)
    {
        $this->contentFieldType[string]: = $contentFieldType[string]:;

        return $this;
    }

    /**
     * Get contentFieldType[string]:
     *
     * @return string 
     */
    public function getContentFieldType[string]:()
    {
        return $this->contentFieldType[string]:;
    }
}
