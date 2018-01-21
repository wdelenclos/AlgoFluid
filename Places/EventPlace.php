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
}