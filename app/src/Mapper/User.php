<?php

namespace App\Mapper;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document(collection="User", repositoryClass="App\Mapper\Repository\UserRepository")
 */
class User
{
    /**
     * @ODM\Id(strategy="AUTO")
     */
    private $id;

    /**
     * @ODM\Field(name="username", type="string")
     */
    private $username;

    /**
     * @ODM\Field(name="name", type="string")
     */
    private $name;

    /**
     * @ODM\Field(name="qtdLogin", type="int")
     */
    private $qtdLogin;

    /**
     * @ODM\Field(name="password", type="string")
     */
    private $password;

    /**
     * @ODM\Field(name="admin", type="bool")
     */
    private $admin;

    /**
     * @ODM\ReferenceMany(targetDocument = "Submit" , inversedBy="user")
     */
    private $submits;


    public function __construct()
    {
        $this->submits = new ArrayCollection();
        $this->qtdLogin = 0;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    /**
     * @return mixed
     */
    public function getSubmits()
    {
        return $this->submits;
    }

    /**
     * @param $submit
     * @return $this
     */
    public function addSubmit($submit)
    {
        $this->submits->add($submit);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function isAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {   if($admin == "admin")
            $this->admin = true;
        else
            $this->admin = false;
    }

    /**
     * @return mixed
     */
    public function getQtdLogin()
    {
        return $this->qtdLogin;
    }

    /**
     * @param mixed $qtdLogin
     */
    public function setQtdLogin($qtdLogin)
    {
        $this->qtdLogin = $qtdLogin;
    }




}
