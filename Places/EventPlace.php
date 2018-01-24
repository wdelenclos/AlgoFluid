<?php
class EventPlace {

    public function __construct($localisation) {

        $this->localisation = $localisation;
    }
    public $frequentation;

    /**
     * Get the value of frequentation
     */
    public function getFrequentation()
    {
        return $this->frequentation;
    }
     /**
     * Get the value of epreuves
     */
    public function getEvent()
    {
        return $this->event;
    }
    /**
     * Get the value of ratio
     */
    public function getRatio()
    {
        return $this->ratio;
    }
}