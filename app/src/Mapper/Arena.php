<?php
/**
 * Created by PhpStorm.
 * User: luisneto98
 * Date: 05/02/18
 * Time: 10:52
 */

namespace App\Mapper;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @ODM\Field(name="gameInfo", type="collection")
     */
    private $gameInfo;


    /**
     * @ODM\Field(name="description", type="string")
     */
    private $description;

    /**
     * @ODM\Field(name="title", type="string")
     */
    private $title;

    /**
     * @ODM\ReferenceMany(targetDocument="Submit")
     */
    private $submits;


    /**
     * @ODM\ReferenceMany(targetDocument="Confrontation", cascade={"persist"})
     */
    private $confrontations;


    /**
     * @ODM\Field(name="date", type="date")
     */
    private $date;

    /**
     * @ODM\Field(name="ready", type="bool")
     */
    private $ready;

    /**
     * @ODM\ReferenceOne(targetDocument="Submit")
     */
    private $winner;

    public function __construct()
    {
        $this->submits = new ArrayCollection();
        $this->confrontations = new ArrayCollection();

    }

    public function start(){
        if($this->getDateUnix() <= time()){
            if(!$this->ready){
                $stage = 1;
                $auxSubmits = $this->submits;
                while(count($auxSubmits) > 1){
                    $auxSubmits = $this->reverseOrder($auxSubmits);
                    $auxSubmits = $this->createConfrontations($auxSubmits,$stage);
                    $stage++;
                }
                $this->winner = $auxSubmits[0];
                $this->ready = true;

            }
            return true;
        }
            return false;


    }

    private function reverseOrder($collection){
        $aux = new ArrayCollection();
        for ($i = $collection->count()-1 ; $i >= 0 ; $i--){
            $aux->add($collection->get($i));
        }
        return $aux;
    }
    private function createConfrontations($submits,$stage){
        $auxSubmits = new ArrayCollection();
        if($submits->count() % 2 == 0){
            for($i = 0 ; $i < $submits->count() ; $i += 2){
                $confrontation = new Confrontation();
                $confrontation->setPlayer1($submits[$i])->setPlayer2($submits[$i+1]);
                $confrontation->start($this->getGame());
                $confrontation->setStage($stage);
                $confrontation->setOrder($i/2 + 1);
                $this->addConfrontation($confrontation);
                $auxSubmits->add($confrontation->getWinner());
            }
        }else{
            for($i = 0 ; $i < count($submits)-1 ; $i += 2){
                $confrontation = new Confrontation();
                $confrontation->setPlayer1($submits[$i])->setPlayer2($submits[$i+1]);
                $confrontation->start($this->getGame());
                $confrontation->setStage($stage);
                $confrontation->setOrder($i/2 + 1);
                $this->addConfrontation($confrontation);
                $auxSubmits->add($confrontation->getWinner());
            }
            $confrontation = new Confrontation();
            $confrontation->setPlayer1($submits[count($submits)-1])->setPlayer2(NULL);
            $confrontation->start($this->getGame());
            $confrontation->setStage($stage);
            $confrontation->setOrder($i/2 + 1);
            $this->addConfrontation($confrontation);
            if($confrontation->getWinner() != NULL){
                $auxSubmits->add($confrontation->getWinner());
            }

        }
        return $auxSubmits;
    }

    public function getDateUnix(){
        return strtotime($this->getDateDefault());
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id){
        $this->id  = $id;
    }

    /**
     * @return mixed
     */
    public function getGameInfo()
    {
        return $this->gameInfo;
    }

    public function getGameName(){
        return $this->gameInfo[0];
    }

    /**
     * @param mixed $game
     * @return Arena
     */
    public function setGameInfo($game)
    {
        $this->gameInfo = $game;
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
    public function addSubmit($submits)
    {
        if($this->submits == NULL){
            $this->submits = new ArrayCollection();
        }

        $this->submits->add($submits);
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
        return $this->ready;
    }

    /**
     * @param mixed $ready
     * @return Arena
     */
    public function setIsReady($ready)
    {
        $this->ready = $ready;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return Arena
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Arena
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfrontations()
    {
        return $this->confrontations->toArray();
    }

    /**
     * @param mixed $confrontations
     */
    public function setConfrontations($confrontations)
    {
        $this->confrontations = $confrontations;
    }

    /**
     * @param $confrontation
     */
    public function addConfrontation($confrontation)
    {
        if($this->confrontations == NULL){
            $this->confrontations = new ArrayCollection();
        }
        $this->confrontations->add($confrontation);
    }

    /**
     * @return mixed
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * @param mixed $winner
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
    }

    /**
    * @return mixed
    */
    public function getGame()
    {
        return ($this->gameInfo[1]);
    }

    /**
     * @return mixed
     */
    public function getDateDefault(){
        return $this->date->format('Y-m-d\TH:i');
    }

    public function getBGArena(){
        return $this->getGame()::getImageBG();
    }
    public function countStages(){
        $maxStage = 0;
        for ($i = 0; $i < $this->confrontations->count(); $i++){
            if($this->confrontations[$i]->getStage() > $maxStage)
                $maxStage = $this->confrontations[$i]->getStage();
        }
        return $maxStage;
    }





}