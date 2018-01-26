<?php

namespace App\Model\Consoles\CardsGame\Game\JoKenPo;


class Game
{
    const NAME = "Jo-Ken-Po";
    const ROUNDS = 3;
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
}