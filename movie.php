<?php


class Movie
{
    //proprietà
    private $name;
    private $genre;
    private $year;
    private $time;

    public function __construct($_name, $_genre, $_year, $_time)
    {
        $this->setName($_name);
        $this->setGenre($_genre);
        $this->setYear($_year);
        $this->setTime($_time);
    }

    public function printToString()
    {
        echo "Nome film: {$this->name} <br>Genere film: {$this->genre} <br>Anno d'uscita: {$this->year}<br>Durata: {$this->time}";
        return;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($_name)
    {
        return $this->name = $_name;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($_genre)
    {
        return $this->genre = $_genre;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($_time)
    {
        return $this->time = $_time;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($_year)
    {
        return $this->year = $_year;
    }
}
