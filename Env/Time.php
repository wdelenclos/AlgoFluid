<?php

class Time {

    public function __construct($hour) {
        $this->hour = $hour; // Tranche horaire
    }
    public $hourForVisit;
    public $hourForSleep;
    public $hourForWork;
    public $hourForParty;
    public $hourForGoingToWork;
    public $hourForTouristShopping;
    public $hourForHobbies;

    /**
     * Get the value of hourForVisit
     */
    public function getHourForVisit()
    {
        return $this->hourForVisit;
    }

    /**
     * Get the value of hourForSleep
     */ 
    public function getHourForSleep()
    {
        return $this->hourForSleep;
    }

    /**
     * Get the value of hourForWork
     */ 
    public function getHourForWork()
    {
        return $this->hourForWork;
    }

    /**
     * Get the value of hourForParty
     */ 
    public function getHourForParty()
    {
        return $this->hourForParty;
    }

    /**
     * Get the value of hourForGoingToWork
     */ 
    public function getHourForGoingToWork()
    {
        return $this->hourForGoingToWork;
    }

    /**
     * Get the value of hourForTouristShopping
     */ 
    public function getHourForTouristShopping()
    {
        return $this->hourForTouristShopping;
    }

    /**
     * Get the value of hourForHobbies
     */ 
    public function getHourForHobbies()
    {
        return $this->hourForHobbies;
    }
}
