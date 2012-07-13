<?php

namespace Acme\SepaBlogBundle\Entity;
class Game{

    public $name;
    public $guess;	
    public $hint;
    public $score;
    public $playnumber;			
    public $firstnumber;


    public function setFirstnumber($firstnumber){
        $this->type = $firstnumber;
    }
	
    public function getFirstnumber(){
       return $this->firstnumber;
    }	

     public function setPlaynumber($playnumber){
        $this->type = $playnumber;
    }
	
    public function getPlaynumber(){
       return $this->playnumber;
    }	
    
    public function setScore($score){
        $this->type = $score;
    }
	
    public function getScore(){
       return $this->score;
    }
	
    public function setHint($hint){
        $this->type = $hint;
    }
	
    public function getHint(){
       return $this->hint;
    }

    public function setGuess($guess){
        $this->type = $guess;
    }
	
    public function getGuess(){
       return $this->guess;
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
