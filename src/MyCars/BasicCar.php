<?php

namespace MyCars;

class BasicCar {
    public $color;
    public $make;
    public $model;
    public $speed;

    public function __construct($make, $model, $color = "black")
    {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
    }

    public function drive($speed = 5)
    {
        $this->speed = $speed;
        echo "Driving at $this->speed mph\n";
    }

    public function stop()
    {
        $this->speed = 0;
        echo "Stopped\n";
    }

    public function __toString() {
        return "A $this->color $this->make $this->model, travelling at $this->speed mph\n";
    }
}
