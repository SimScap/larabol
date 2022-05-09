<?php
include_once __DIR__ . "/Genre.php";

class Movie{
    protected $title;
    protected $genre;
    protected $director;
    protected $producer;
    protected $language;
    protected $year;

    function __construct(string $title, Genre $genre,string $director,string $producer,string $language,int $year){
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director ;
        $this->producer = $producer;
        $this->language = $language;
        $this->year = $year;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getGenre(){
        return $this->genre;
    }
}