<?php
class Events {

    public function __construct($hour) {
        $this->hour = $hour; // Tranche horaire de l'event
    }

    public $eventsOfTheHour = []; // Nb d'event sur le lieu à cette heure


    /**
     * Get the value of eventsOfTheHour
     */ 
    public function getEventsOfTheHour()
    {
        return $this->eventsOfTheHour;
    }
}