<?php
/**
 * Created by PhpStorm.
 * User: luisneto98
 * Date: 22/01/18
 * Time: 19:48
 */

namespace App\Mapper;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document(collection="Submit", repositoryClass="App\Mapper\Repository\SubmitRepository")
 */
class Submit
{
    /**
     * @ODM\Id(strategy="AUTO")
     */
    private $id;


    /**
     * @ODM\ReferenceOne(targetDocument = "User" , mappedBy="submits")
     */
    private $user;


    /**
     * @ODM\Field(name="code", type="string")
     */
    private $code;

    /**
     * @ODM\Field(name="nickname", type="string")
     */
    private $nickname;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return Submit
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return Submit
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param mixed $nickname
     * @return Submit
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }





}