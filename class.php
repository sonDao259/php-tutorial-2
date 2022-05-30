<?php
    class Animal {
        private $name;
        private $legs;
        function __construct($name, $legs) {
            $this->name = $name;
            $this->legs = $legs;
        }
    }
    class Dog extends Animal {
        function __construct($name, $legs) {
            $this->name = $name;
            $this->legs = $legs;
        }
        function getInfo() {
            return $this->name.' has '.$this->legs.' legs';
        }
    }
    $dog = new Dog('Dog', 4);
    echo($dog->getInfo());
    echo '<br/>';

    // vi du voi constant
    class Car {
        const BRAND = 'Mercedes';
        const PRICE = '30000$';
        function showCarInfo() {
            return self::BRAND.': '.self::PRICE;
        }
    }
    $car = new Car();
    echo $car->showCarInfo();