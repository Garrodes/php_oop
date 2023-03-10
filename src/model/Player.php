<?php

class Player

{
    private $name;

    private int $level=1;

    private $kamas=0;

    public function __construct($name, int $level) 
    {
        $this->name = $name;

        $this -> level = $level;
    }

    public function getLevel()
    {
        return $this -> level;
    }

    public function setKamas($number)
    {
        $this ->kamas = $number;
    }

    public function getKamas()
    {
        return $this->kamas;
    }
    

}