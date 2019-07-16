<?php
class Ferrari extends Car {
    var $liftup = 100;

    public function __construct() {
        $this->maker = "Ferrari";
        $this->price = 7000000;
        $this->capacity = 3;
        $this->speed = 270;
    }

    public function liftup() {
        $this->liftup = 140;
        $this->speed = 270 * 0.8;
    }
}