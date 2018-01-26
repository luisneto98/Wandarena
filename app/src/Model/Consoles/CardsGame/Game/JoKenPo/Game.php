<?php

namespace App\Model\Consoles\CardsGame\Game\JoKenPo;


class Game
{
    const NAME = "Jo-Ken-Po";
    const ROUNDS = 3;
    const COUNTCARDS = 3;
    const CARDS = array("pedra","papel","tesoura");


    /**
     * @return string
     */
    static function getName(){
        return self::NAME;
    }

    /**
     * @return int
     */
    static function getRounds(){
        return self::ROUNDS;
    }

    /**
     * @return array
     */
    static function getCards(){
        return self::CARDS;
    }

    /**
     * @param $card1
     * @param $card2
     * @return int
     */
    static function winnerCard($card1,$card2){
        if($card1 == $card2) {
            return 0;
        }elseif($card1 == "pedra" && $card2 == "tesoura"){
            return 1;
        }elseif($card1 == "tesoura" && $card2 == "papel"){
            return 1;
        }elseif ($card1 == "papel" && $card2 == "pedra"){
            return 1;
        }else{
            return 2;
        }
    }

    /**
     * @param $code
     * @param $cardsP1
     * @param $cardsP2
     * @return mixed
     * define how to play
     */
    static function play($code,$cardsP1,$cardsP2){
        if(count($cardsP1) == self::COUNTCARDS){
            return $code->call("round1",$cardsP1);

        }elseif(count($cardsP1) == (self::COUNTCARDS - 1)){
            return $code->call("round2",array($cardsP1[0],$cardsP1[1],$cardsP2[0],$cardsP2[1]));
        }else{
            return $cardsP1[0];
        }


    }
}