<?php

namespace Acme\SepaBlogBundle\Entity;
class Game{

    public $name;
    public $guess;
    public $guess2;
    public $guess3;	
    public $hint;
    public $chance;	
    public $score;			
    public $firstnumber;
    public $type;


    public function setType($type){
        $this->type = $type;
    }
	
    public function getType(){
       return $this->type;
    }	


    public function setChance($chance){
        $this->chance = $chance;
    }
	
    public function getChance(){
       return $this->chance;
    }	

    public function setFirstnumber($firstnumber){
        $this->firstnumber = $firstnumber;
    }
	
    public function getFirstnumber(){
       return $this->firstnumber;
    }	
    
    public function setScore($score){
        $this->score = $score;
    }
	
    public function getScore(){
       return $this->score;
    }
	
    public function setHint($hint){
        $this->hint = $hint;
    }
	
    public function getHint(){
       return $this->hint;
    }

    public function setGuess($guess){
        $this->guess = $guess;
    }
	
    public function getGuess(){
       return $this->guess;
    }	
	
    public function setGuess2($guess2){
        $this->guess2 = $guess2;
    }
	
    public function getGuess2(){
       return $this->guess2;
    }	

    public function setGuess3($guess3){
        $this->guess3 = $guess3;
    }
	
    public function getGuess3(){
       return $this->guess3;
    }	


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}
