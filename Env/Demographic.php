<?php
class Demographic {
    // Transcrit la part de gens dans ce lieu.
    public function __construct($hour) {
        $this->hour = $hour; 

    }
    public $numberOfTeens;
    public $numberOfPotentialSportLovers;
    public $numberOfGranny;
    public $numberOfPopulation;
    public $numberOfPopAvailableByDay;

    /**
     * Get the value of numberOfTeens
     */ 
    public function getNumberOfTeens()
    {
        return $this->numberOfTeens;
    }


    /**
     * Get the value of numberOfPopulation
     */ 
    public function getNumberOfPopulation()
    {
        return $this->numberOfPopulation;
    }


    /**
     * Get the value of numberOfGranny
     */ 
    public function getNumberOfGranny()
    {
        return $this->numberOfGranny;
    }

    /**
     * Get the value of numberOfPotentialSportLovers
     */ 
    public function getNumberOfPotentialSportLovers()
    {
        return $this->numberOfPotentialSportLovers;
    }


    /**
     * Get the value of numberOfPopAvailableByDay
     */ 
    public function getNumberOfPopAvailableByDay()
    {
        return $this->numberOfPopAvailableByDay;
    }
    
    public function getPlaceCapacity(){
        
    }
}