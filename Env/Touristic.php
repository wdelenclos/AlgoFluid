<?php
class Touristic {

    public function __construct($hour) {
        $this->hour = $hour;
        $strangers = 927087;
        $frenchs = 407014;
    }

    /**
     * Get the value of frequencyList
     */
    public function getFrequencyList()
    {
        return $this->frequencyList;
    }
}