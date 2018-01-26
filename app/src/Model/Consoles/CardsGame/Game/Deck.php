<?php

namespace App\Model\Consoles\CardsGame\Game;


class Deck
{
    /**
     * @var $cards
     */
    private $cards;// array of cards


    /**
     * Deck constructor.
     */
    public function __construct()
    {
        $this->cards = array();
    }



    /**
     * @return mixed
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param mixed $cards
     */
    public function setCards($cards)
    {
        $this->cards = $cards;
    }

    /**
     * @param $posi
     * @return mixed
     */

    public function getCard($posi){
        return $this->cards[$posi];
    }

    /**
     * @return $this
     */
    public function shuflleDeck(){
        shuffle($this->cards);
        return $this;
    }

    /**
     * @param $card
     * @return bool
     */

    public function removeCard($card){
       if(in_array($card,$this->cards)){
           unset($this->cards[array_search($card,$this->cards)]);
           $this->cards = array_values($this->cards);
           return true;
       }
       return false;
    }

    /**
     * @return int
     */

    public function countDeck(){
        return count($this->cards);
    }

    /**
     * @return array
     */
    public function slice1(){
        return array_slice($this->cards,0,$this->countDeck()/2);
    }

    /**
     * @return array
     */
    public function slice2(){
        return array_slice($this->cards,$this->countDeck()/2,$this->countDeck()/2);
    }




}