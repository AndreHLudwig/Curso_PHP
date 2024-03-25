<?php

class Passenger{
    public $name = "Maria";
    public $age = 30;
    public $seatNumer = "A12";

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSeatNumber(){
        return $this->seatNumer;
    }

    public function setSeatNumber($seatNumer){
        $this->seatNumer = $seatNumer;
    }
}