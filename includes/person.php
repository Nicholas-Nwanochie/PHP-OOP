<?php

class Person
{
    ///properites
    public $name;
    public $eyecolor;
    public $age;

    public static $drinkingAge = 21;


    public function __construct($name, $eyecolor, $age)
    {
        $this->name = $name;
        $this->eyecolor = $eyecolor;
        $this->age = $age;
    }
    ////methods

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPerson()
    {
        return $this->name;
    }


    public function getDA()
    {
        return  self::$drinkingAge;
    }


    public static function SetDrinkingAge($newDA)
    {
        self::$drinkingAge = $newDA;
    }

    public function __destruct()
    {
    }
}
