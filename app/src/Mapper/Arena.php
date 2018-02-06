<?php
/**
 * Created by PhpStorm.
 * User: luisneto98
 * Date: 05/02/18
 * Time: 10:52
 */

namespace App\Mapper;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document(collection="Arena", repositoryClass="App\Mapper\Repository\ArenaRepository")
 */
class Arena
{
    /**
     * @ODM\Id(strategy="AUTO")
     */
    private $id;

    /**
     * game location
     * @ODM\Field(name="game", type="string")
     */
    private $game;

    /**
     * console location
     * @ODM\Field(name="console", type="string")
     */
    private $console;

    /**
     * @ODM\Field(name="submits")
     * @ReferenceMany(targetDocument="Submit")
     */
    private $submits;


    /**
     * @ODM\Field(name="confrontations")
     * @ReferenceMany(targetDocument="Confrontation")
     */
    private $confrontations;


    /**
     * @ODM\Field(name="date" type="date")
     */
    private $date;

    /**
     * @ODM\Field(name="isReady" type="bool")
     */
    private $isReady;


    public function start(){
        if($this->getDateUnix($this->date) > time()){
            if(!$this->isReady()){

            }
        }
            return false;


    }

    private function getDateUnix($date){
        $dateArray = getdate($date);
        return mktime($dateArray["hours"],$dateArray["minutes"],$dateArray["seconds"],
            $dateArray["month"],$dateArray["mday"],$dateArray["year"]);
    }


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
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param mixed $game
     * @return Arena
     */
    public function setGame($game)
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsole()
    {
        return $this->console;
    }

    /**
     * @param mixed $console
     * @return Arena
     */
    public function setConsole($console)
    {
        $this->console = $console;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubmits()
    {
        return $this->submits;
    }

    /**
     * @param mixed $submits
     * @return Arena
     */
    public function setSubmits($submits)
    {
        $this->submits = $submits;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return Arena
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function isReady()
    {
        return $this->isReady;
    }

    /**
     * @param mixed $isReady
     * @return Arena
     */
    public function setIsReady($isReady)
    {
        $this->isReady = $isReady;
        return $this;
    }




}