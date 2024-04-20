<?php
    // interface shape{
    //     public function calculateArea();
    // }

    abstract class shape{
        abstract public function calculateArea();
    }

    class circle extends shape{
        private $radius;
        public function __construct($radius){
            $this->radius = $radius;
        }
        public function calculateArea(){
            return pi() * pow($this->radius, 2);
        }
    }

    // class rectangle implements shape {
    //     private $width, $height;
    //     public function __construct($width, $height){
    //         $this->width = $width;
    //         $this->height = $height;
    //     }
    //     public function calculateArea(){
    //         return $this->width * $this->height;
    //     }
    // }

    // function printArea(shape $shape){
    //     echo "Area: " . $shape->calculateArea() . "<br>";
    // }

    class rectangle extends shape{
        private $width, $height;
        public function __construct($width, $height){
            $this->width = $width;
            $this->height = $height;
        }
        public function calculateArea(){
            return $this->width * $this->height;
        }
    }

    $circle = new circle(5);
    $rectangle = new rectangle(4, 6);

    // printArea($circle);
    // printArea($rectangle);

    echo "Area of circle: " . $circle->calculateArea() . "<br>";
    echo "Area of rectangle: " . $rectangle->calculateArea() . "<br>";