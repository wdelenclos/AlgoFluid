<?php
class LivingPlace {

    public function __construct($localisation) {
        function getDistance( $latitude1, $longitude1, $latitude2, $longitude2 ) {  
            $earth_radius = 6371;
            $dLat = deg2rad( $latitude2 - $latitude1 );  
            $dLon = deg2rad( $longitude2 - $longitude1 );  
            $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);  
            $c = 2 * asin(sqrt($a));
            $d = $earth_radius * $c;
            return $d;
        }


        $this->localisation = $localisation;
    }
    public $frequentation;

    public function getEventProximityCoort(){
     /*
        _Ici on  retourne la ponderation relative à l'event le plus proche 
        
        _Ce qui définit cette ponderation:

       on récupère l'event' le plus proche dans un rayon de moins de 300m et on prends sa fréquentation. -> Frequency

        et on retourne -> (nearFrequency)
        $distance = getDistance( 56.130366, -106.34677099999, 57.223366, -106.34675644699 );
        if( $distance < 0.3 ) {
            echo "Within 300 meters radius";
        } else {
            echo "Outside 300 meters radius";
        }
        */
    }
    public function getTouristicProximityCoort(){
        /*
        _Ici on  retourne la ponderation relative au lieu touristique le plus proche 
        
        _Ce qui définit cette ponderation:

       on récupère le lieu touristique le plus proche dans un rayon de moins de 300m et on prends sa fréquentation. -> nearFrequency

        et on retourne -> (nearFrequency)
        $distance = getDistance( 56.130366, -106.34677099999, 57.223366, -106.34675644699 );
        if( $distance < 0.3 ) {
            echo "Within 300 meters radius";
        } else {
            echo "Outside 300 meters radius";
        }

        */
    }
    public function getTransportCoort(){
     /*
        _Ici on  retourne la ponderation relative à la station la plus proche 
        
        _Ce qui définit cette ponderation:

       on récupère la staion la plus proche dans un rayon de moins de 300m et on prends sa fréquentation. -> nearFrequency
       on récupère la distance -> distance
        $distance = getDistance( 56.130366, -106.34677099999, 57.223366, -106.34675644699 );
        if( $distance < 0.3 ) {
            echo "Within 300 meters radius";
        } else {
            echo "Outside 300 meters radius";
        }
        et on retourne -> [nearFrequency, distance]

        */
    }
    /**
     * Get the value of frequentation
     */
    public function getFrequentation()
    {   
         /*
        _Ici on  retourne la fréquentation de living Place (et attention là c'est du lourd)
        
        _Ce qui définit cette fréquentation:

        On récupère la capacité du lieu dans l'objet d'environnement Demographic avec la fonction (getPlaceCapacity) - 1à à 100, 100 à 300, +3000 -> capacityIndex-> .02 / .08 / .8
        On récupère le code d'activité du lieu
        On récupère le facteur d'attractivité du lieu dans l'objet time en lui passant le code d'activité ->AttracivityIndex
        on recupère les transport coort touristic et event proximity coort
        ON RECUPERE LE NOMBRE DE LIEUX avec le meme code d'activité À PROXIMITÉ       -> simily

        (((transportcoort+touristicecoort+eventcoort)/simily)*capacityIndex)*AttracivityIndex
        */
        return $this->frequentation;
    }
}