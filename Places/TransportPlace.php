<?php
class TransportPlace {

    public function __construct($localisation) {
        $this->localisation = $localisation;
    }
    public $frequentation;

    /**
     * Get the value of frequentation
     */
    public function getFrequentation()
    {
        /*
        _Ici on  retourne la fréquentation de la station de métro ( nombre de gens sur le lieu en fonction de l'environnement [henre etc]) en lui precisant l'id de notre station.
        
        _Ce qui définit cette fréquentation:
        On récupère la fréquentation journalière de la station dans l'objet d'environnement Transport .
        getStationsFrequency(id);

        */

        return $this->frequentation;
    }
    public function getLines(){

         /*
        _Ici on retourne les lignes de la station de métro

        _Ce qui définit ces lignes:
        On récupère les lignes dans l'objet d'environnement Transport en lui precisant l'id de notre station.
        getStationsLines(id);
        
        */
        return $this->lines;
    }
}