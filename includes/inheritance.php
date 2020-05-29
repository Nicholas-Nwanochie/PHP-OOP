<?php

class Person{
    protected $first = "Nick";
    private $last = "nwanochie";
    private $age = "26";

    public function owner()
    {
        $a = $this->first;
        return $a;
    }
}

class Pet extends Person{

    public function owner()
    {
        $a = $this->first;
        return $a;
    }
}

