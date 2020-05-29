<?php

class Person
{
    ///properites
    public $name;
    public $eyecolor;
    public $age;

    public function __construct($name,$eyecolor,$age){
$this->name = $name;
        $this->eyecolor = $eyecolor;
        $this->age = $age;
    }
    ////methods

    public function setName($name)
    {
        $this->name = $name;
    }


    public function __destruct()
    {
        
    }
}
