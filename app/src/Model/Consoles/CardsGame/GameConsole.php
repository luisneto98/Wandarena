<?php
/**
 * Created by PhpStorm.
 * User: luisneto98
 * Date: 23/01/18
 * Time: 18:07
 */

namespace App\Model\Consoles\CardsGame;


use App\Model\Consoles\CardsGame\Control\Player;
use App\Model\Consoles\CardsGame\Game\Deck;

class GameConsole
{
    private $logJson;

    public function __construct()
    {
        $this->logJson = array();
    }

    private function runRound($player1,$player2,$game){
        //log
        $logRound = array();
        $logRound["player1"] = array("hand"=>$player1->getDeckInHand()->getCards());
        $logRound["player2"] = array("hand"=>$player2->getDeckInHand()->getCards());

        $card1 = $player1->playRound($game,$player2->getDeckInHand());
        $card2 = $player2->playRound($game,$player1->getDeckInHand());

        //log
        $logRound["player1"]["playedCard"] = $card1;
        $logRound["player2"]["playedCard"] = $card2;

        $winner = $game::winnerCard($card1,$card2);

        //log
        $logRound["winner"] = $winner;
        if($winner == 1){
            $player1->increasePoint();
        }elseif($winner == 2){
            $player2->increasePoint();
        }
        return  $logRound;
    }
    private function runMatch($player1,$player2,$game){
        $logMatch = array();
        $deck = new Deck();
        $deck->setCards(array_merge($game::getCards(),$game::getCards()));
        $deck->shuflleDeck();
        //log
        $logMatch["cards"] = $deck->getCards();

        $player1->prepareMatch($deck->slice1());

        //log
        $logMatch["player1"] = array("deck"=>$player1->getDeck()->getCards());

        $player2->prepareMatch($deck->slice2());

        //log
        $logMatch["player2"] = array("deck"=>$player2->getDeck()->getCards());
        $logMatch["rounds"] = array();
        for ($i = 0 ; $i < $game::getRounds(); $i++){
            //log
            array_push($logMatch["rounds"],$this->runRound($player1,$player2,$game));
        }
        if($player1->getPoints() > $player2->getPoints()){
            $player1->increaseVictories();

            //log
            $logMatch["winner"] = 1;
        }elseif ($player2->getPoints() > $player1->getPoints()){
            $player2->increaseVictories();

            //log
            $logMatch["winner"] = 2;
        }else{
            //log
            $logMatch["winner"] = 0;
        }
        return $logMatch;
    }


    public function startGame($codePlayer1,$codePlayer2,$game){
        $player1 = new Player($codePlayer1);
        $player2 = new Player($codePlayer2);
        $this->logJson["matchs"] = array();
        for ($i = 0; $i < 100;$i++){
            array_push($this->logJson["matchs"],$this->runMatch($player1,$player2,$game));
        }

        if($player1->getVictories() > $player2->getVictories()){
            $this->logJson["winner"] = 1;
        }elseif($player1->getVictories() < $player2->getVictories()){
            $this->logJson["winner"] = 2;
        }else{
            $this->logJson["winner"] = 0;
        }
        return $this->logJson;
    }
}