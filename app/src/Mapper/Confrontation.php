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
     * @ODM\Field(name="player1", type="string")
     */
    private $player1;
    /**
     * @ODM\Field(name="player2", type="string")
     */
    private $player2;
    /**
     * @ODM\Field(name="winner", type="int")
     */
    private $winner;

    /**
     * @ODM\Field(name="key", type="int")
     */
    private $key;
    /**
     * @ODM\Field(name="order", type="int")
     */
    private $order;
    /**
     * @ODM\Field(name="logJson"; type="string")
     */
    private $logJson;


    public function start($gameClass)
    {
        $gameConsole = new GameConsole();
        $this->logJson = $gameConsole->startGame($this->player1,$this->player2,$gameClass);
        $this->winner = $this->logJson["winner"];
        $this->logJson = json_encode($this->logJson);
        if($this->winner == 0){
            return $this->start($gameClass);
        }
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
        if($this->winner == 1){
            return $this->player1;
        }elseif ($this->winner == 2){
            return $this->player2;
        }else{
            return 0;
        }
    }

    /**
     * @return mixed
     */
    public function getLogJson()
    {
        return $this->logJson;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
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