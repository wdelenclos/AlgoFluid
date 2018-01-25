<?php
class TouristicPlace {

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
        _Ici on  retourne la fréquentation du lieu de tourisme
        
        _Ce qui définit cette fréquentation:
        On récupère la fréquentation journalière du lieu dans l'objet d'environnement Touristic. -> frequency
        On récupère la ponderation horaire dans l'objet d'environnement time en lui passant le type en paramètre. -> ponderation

        On retourne celon la fonction:
        frequency/6 * ponderation

        */
        return $this->frequentation;
    }
}