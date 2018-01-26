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
     * @ReferenceOne(targetDocument = "User")
     */
    private $user;

}