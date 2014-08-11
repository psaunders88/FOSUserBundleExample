<?php

namespace Test\Component\Model\User;

use FOS\UserBundle\Entity\User as FOSBaseUser;

class User extends FOSBaseUser
{
    
    /**
     * User Id
     * 
     * @var integer
     */
    protected $id;
    
    /**
     * First name
     * 
     * @var string
     */
    protected $forename;
    
    /**
     * Second name
     * 
     * @var string
     */
    protected $surname;
    
    /**
     * When this user was created
     * 
     * @var \DateTime
     */
    protected $createdOn;
    
    /**
     * When this user was last updated
     * 
     * @var \DateTime
     */
    protected $updatedOn;
    
    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Get user id
     * 
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get user forename
     * 
     * @return string
     */
    public function getForename()
    {
        return $this->forename;
    }

    /**
     * Get surname
     * 
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Get created on date
     * 
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Get update on date
     * 
     * @return \DateTime
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * Set forename
     * 
     * @param string $forename
     */
    public function setForename($forename)
    {
        $this->forename = $forename;
    }

    /**
     * Set surname
     * 
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * Set data created on
     * 
     * @param \DateTime $createdOn
     */
    public function setCreatedOn(\DateTime $createdOn)
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Set date user last updated
     * 
     * @param \DateTime $updatedOn
     */
    public function setUpdatedOn(\DateTime $updatedOn)
    {
        $this->updatedOn = $updatedOn;
    }
}
