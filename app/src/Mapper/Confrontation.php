<?php
/**
 * Created by PhpStorm.
 * User: luisneto98
 * Date: 29/01/18
 * Time: 18:26
 */

namespace App\Mapper;

use App\Model\Consoles\CardsGame\GameConsole;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document(collection="Confrontation", repositoryClass="App\Mapper\Repository\ConfrontationRepository")
 */
class Confrontation
{
    /**
     * @ODM\Id(strategy="AUTO")
     */
    private $id;

    /**
     * @ODM\ReferenceOne(targetDocument="Submit")
     */
    private $player1;
    /**
     * @ODM\ReferenceOne(targetDocument="Submit")
     */
    private $player2;
    /**
     * @ODM\ReferenceOne(targetDocument="Submit")
     */
    private $winner;

    /**
     * @ODM\Field(name="key", type="int")
     */
    private $stage;
    /**
     * @ODM\Field(name="order", type="int")
     */
    private $order;
    /**
     * @ODM\Field(name="logJson", type="string")
     */
    private $logJson;


    public function start($gameClass)
    {
        $gameConsole = new GameConsole();
        if($this->player2 == NULL)
            $this->logJson = $gameConsole->startGame($this->player1->getCode(),$gameClass::getBot(),$gameClass);
        else
            $this->logJson = $gameConsole->startGame($this->player1->getCode(),$this->player2->getCode(),$gameClass);


        if($this->logJson["winner"] == 1){
            $this->winner = $this->player1;
        }elseif($this->logJson["winner"] == 2){
            $this->winner = $this->player2;
        }else{
            return $this->start($gameClass);
        }
        $this->logJson = json_encode($this->logJson);
        return json_decode($this->logJson);
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
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * @param $player1
     * @return $this
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlayer2()
    {
        return $this->player2;
    }

    /**
     * @param $player2
     * @return $this
     */
    public function setPlayer2($player2)
    {
        $this->player2 = $player2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * @return mixed
     */
    public function getLogJson()
    {
        return json_decode($this->logJson);
    }

    /**
     * @return mixed
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param mixed $key
     * @return $this
     */
    public function setStage($key)
    {
        $this->stage = $key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }




}