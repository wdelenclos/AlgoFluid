<?php

class Transport {

    public function __construct($hour) {
        $this->hour = $hour;

        // Définition du facteur d'affluance par tranche

        $moment = date('H', $this->hour[0]);
        $partOfCohort;
        $stationsFrequency = [];

        if( $moment < 4 && $moment > 2 ){   // nuit = aucun voyageur
            $partOfCohort = 0;
        }
        if( $moment > 4 && $moment < 6){
            $partOfCohort = 1/24;
        }
        if( $moment > 6 && $moment < 8){
            $partOfCohort = 6/24;
        }
        if( $moment > 8 && $moment < 10){
            $partOfCohort = 3/24;
        }
        if( $moment > 10 && $moment < 12){
            $partOfCohort = 1/24;
        }
        if( $moment > 12 && $moment < 16){
            $partOfCohort = 2/24;
        }
        if( $moment > 16 && $moment < 18){
            $partOfCohort = 5/24;
        }
        if( $moment > 18 && $moment < 20){
            $partOfCohort = 3/24;
        }
        if( $moment > 20 && $moment < 00 ){
            $partOfCohort = 2/24;
        }
        foreach($transportList as $station){
            $traficOfHour = (($station->trafic)/365)*$partOfCohort;
            $arr = [$station->name, $traficOfHour];
            array_push($stationsFrequency,$arr);
        }
        $this->stationsFrequency = $stationsFrequency;
    }

    /**
     * Get the value of stationsFrequency
     */
    public function getStationsFrequency()
    {
        return $this->stationsFrequency;
    }
}
