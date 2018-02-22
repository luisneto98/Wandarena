<?php

namespace App\Model\Consoles\CardsGame\Game\JoKenPo;


class Game
{
    const NAME = "Jo-Ken-Po";
    const ROUNDS = 3;
    const COUNTCARDS = 3;
    const CARDS = array("pedra","papel","tesoura");
    const BOT = __DIR__."/Bot.lua";
    const IMAGESCARDS = array(array("name"=>"pedra","image"=>"/Images/Jo-Ken-Po/Textures/cardpedra.png"),array("name"=>"papel","image"=>"/Images/Jo-Ken-Po/Textures/cardpapel.png"),
        array("name"=>"tesoura","image"=>"/Images/Jo-Ken-Po/Textures/cardtesoura.png"));
    const IMAGEBG = "/Images/Jo-Ken-Po/Textures/bg.png";
    const IMAGESPERSON = array("enemy"=>"/Images/Jo-Ken-Po/Player1/enemy.png",
        "face"=>"/Images/Jo-Ken-Po/Player1/face.png");



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
     * @return string
     */
    static function getBot(){
        return self::BOT;
    }
    /**
     * @return string
     */
    static function getImageBG(){
        return self::IMAGEBG;
    }

    /**
     * @return array
     */
    static function getImagesCards(){
        return self::IMAGESCARDS;
    }
    /**
     * @return array
     */
    static function getImagesPerson(){
        return self::IMAGESPERSON;
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