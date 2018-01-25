<?php
class EventPlace {

    public function __construct($localisation) {

        $this->localisation = $localisation;
    }
    public $frequentation;
    public function getAttractivityIndex(){
        /*
        Le remplissage varie de 70% pour les evenements les moins intéréssants  à 100% pour la cérémonie d'ouverture et de fermeture.
        on fait.
        */
    }
    /**
     * Get the value of frequentation
     */
    public function getFrequentation()
    {
        /*
        _Ici on retourne la fréquentation de l'évènement

        _Ce qui définit cette fréquentation:
        On récupère la capacité du lieu dans l'objet d'environnement Events en lui precisant l'id de notre stade/lieu.
        getCapacitiesPlace(id); -> capacity
        On récupère la pondération horaire dans l'objet d'environnement Events en lui precisant l'id de notre stade/lieu. -> hourRate
        On récupère la pondération evenementielle dans l'objet de place EventPlace grace a la fonction getPonderation();  -> eventRate

        _Formule pour le return:
        (capacity*hourRate)*eventRate

        */
        return $this->frequentation;
    }
     /**
     * Get the value of epreuves
     */
    public function getEvent()
    {
         /*
        _Ici on retourne l'évenement du lieu

        _Ce qui définit cet event:
        On récupère l'evenement l'objet evenementiel en passant notre ID en paramètre.
        getEvent(id); -> event

        */
        return $this->event;
    }
    /**
     * Get the value of ratio
     */
    public function getRatio()
    {
        function float2rat($n, $tolerance = 1.e-6) {
            $h1=1; $h2=0;
            $k1=0; $k2=1;
            $b = 1/$n;
            do {
                $b = 1/$b;
                $a = floor($b);
                $aux = $h1; $h1 = $a*$h1+$h2; $h2 = $aux;
                $aux = $k1; $k1 = $a*$k1+$k2; $k2 = $aux;
                $b = $b-$a;
            } while (abs($n-$h1/$k1) > $n*$tolerance);
        
            return "$h1/$k1";
        }
    
          /*
        _Ici on retourne le ratio touristes locaux

        _Ce qui définit ce ratio:
        on récupère le resultat de  getFrequentation() -> frequentation
        On récupère le nombre de touristes du jour sur l'ensemble des évènements (16% du nombre total de touriste du jour sur paris) -> globalNumber
        On récupère le nombre d'évènements du jour -> numberOfEvents
        on récupère la capacité d'accueil de tout les lieux d'evenement -> capacityTotal
        on récèpre la capacité du lieu -> capacity 
        On retourne ensuite le ratio selon cette forumule

        float2rat(frequentation/(capacityTotal/(globalNumber*capacity)));

        */
        return $this->ratio;
    }
}