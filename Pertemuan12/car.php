<?php
    class car{
        // private $model, $color;
        private $brand;

        // public function __construct($model, $color){
        //     $this->model = $model;
        //     $this->color = $color;
        // }

        public function __construct($brand){
            echo "A new car is created. <br>";
            $this->brand = $brand;
        }

        public function getBrand(){
            return $this->brand;
        }

        // public function setColor($color){
        //     $this->color = $color;
        // }

        // public function getColor(){
        //     return $this->color;
        // }

        public function __destruct()
        {
            echo "The car is destroyed <br>";
        }
    }

    $car = new car("Toyota");
    echo "Brand: " . $car->getBrand() . "<br>";
    // echo "Model: " . $car->getModel() . "<br>";
    // echo "Color: " . $car->getColor() . "<br>";

    // $car->setColor("Red");
    // echo "Update color: " . $car->getColor() . "<br>";