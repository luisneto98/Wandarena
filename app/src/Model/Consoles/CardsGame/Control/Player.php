<?php
/**
 * Created by PhpStorm.
 * User: luisneto98
 * Date: 22/01/18
 * Time: 19:32
 */

namespace App\Model\Consoles\CardsGame\Control;


use App\Model\Consoles\CardsGame\Game\Deck;

class Player
{

    private $deckInHand;
    private $deck; // cards avaliable
    private $points;
    private $victories; // number of victories
    private $Code;
    private $idPlayer;

    /**
     * Player constructor.
     * @param $idPlayer
     */
    public function __construct($idPlayer)
    {
        $this->idPlayer = $idPlayer;
        $this->deckInHand = new Deck();
        $this->deck = new Deck();
        $this->Code = new \Lua($idPlayer);
        $this->victories = 0;
    }

    /**
     * @param $cards
     */
    public function prepareMatch($cards)
    {
        $this->deckInHand->setCards($cards);
        $this->deck->setCards($cards);
        $this->points = 0;
    }

    /**
     * @return mixed
     */
    public function getDeckInHand()
    {
        return $this->deckInHand;
    }

    /**
     * @return mixed
     */
    public function getDeck()
    {
        return $this->deck;
    }

    /**
     * @param mixed $Deck
     */
    public function setDeck($Deck)
    {
        $this->deck = $Deck;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getVictories(): int
    {
        return $this->victories;
    }

    /**
     * @param int $victories
     */
    public function setVictories(int $victories)
    {
        $this->victories = $victories;
    }

    /**
     * @return Lua
     */
    public function getCode(): Lua
    {
        return $this->Code;
    }

    /**
     * @param Lua $Code
     */
    public function setCode(Lua $Code)
    {
        $this->Code = $Code;
    }

    /**
     * @return mixed
     */
    public function getIdPlayer()
    {
        return $this->idPlayer;
    }

    public function increasePoint(){
        $this->points += 1;
    }

    public function increaseVictories(){
        $this->victories += 1;
    }

    public function playRound($game,$deckP2){
        $card = $game::play($this->Code,$this->deckInHand->getCards(),$deckP2->getCards());
        if($card == null  || !(in_array($card, $this->deckInHand->getCards())))
            $card = $this->deckInHand->getCard(0);
        $this->deckInHand->removeCard($card);
        return $card;

    }



}