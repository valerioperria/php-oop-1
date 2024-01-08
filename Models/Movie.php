<?php
class Movie
{
    public $film;
    public $cast;
    public $details;

    function __construct($_film, Cast $_cast, Details $_details)
    {
        $this->film = $_film;
        $this->cast = $_cast;
        $this->details = $_details;
    }
}
