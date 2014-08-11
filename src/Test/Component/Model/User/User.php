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
    
    public function getId() {
        return $this->id;
    }

    public function getForename() {
        return $this->forename;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getCreatedOn() {
        return $this->createdOn;
    }

    public function getUpdatedOn() {
        return $this->updatedOn;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setForename($forename) {
        $this->forename = $forename;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }

    public function setCreatedOn(\DateTime $createdOn) {
        $this->createdOn = $createdOn;
    }

    public function setUpdatedOn(\DateTime $updatedOn) {
        $this->updatedOn = $updatedOn;
    }
}
