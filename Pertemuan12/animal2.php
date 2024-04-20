<?php
    class animal2{
        public $name;
        protected $age;
        private $color;

        public function __construct($name, $age, $color){
           $this->name = $name;
           $this->age = $age;
           $this->color = $color; 
        }

        public function getname (){
            return $this->name;
        }

        protected function getAge(){
            return $this->age;
        }

        public function getColor(){
            return $this->color;
        }
    }

    $animal2 = new animal2("Dog", 3, "Brown");
    echo "Name: " . $animal2->name . "<br>";
    echo "Age: " . $animal2->getAge() . "<br>";
    echo "Color: " . $animal2->getColor() . "<br>";