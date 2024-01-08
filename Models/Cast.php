<?php
class Cast
{
    public $director;
    public $protagonist;
    public $second_actor;

    function __construct($_director, $_protagonist, $_second_actor)
    {
        $this->director = $_director;
        $this->protagonist = $_protagonist;
        $this->second_actor = $_second_actor;
    }

    function printFullCast()
    {
        return $this->director . '<p>' . $this->protagonist . '<p>' . $this->second_actor;
    }
}
