<?php
class Details
{
    public $film_duration;
    public $rated_R;
    public $viewing;
    public $vote;


    function __construct($_film_duration, $_rated_R, $_vote)
    {
        $this->film_duration = $_film_duration;
        $this->rated_R = $_rated_R;
        $this->vote = $_vote;
        $this->possibilityOfViewing($_rated_R);
    }

    function printFullDetails()
    {
        return $this->film_duration . '<p>' . $this->viewing . '<p>' . $this->vote;
    }

    public function possibilityOfViewing($rated_R)
    {
        if ($rated_R == true) {
            $this->viewing = 'Vietato ai minori di 18 anni';
        } else {
            $this->viewing = 'Adatto a tutte le età';
        }
    }
}
