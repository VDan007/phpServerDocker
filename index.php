<?php

require'./functions.php';
//require './router.php';



class Person {
    public $name;
    public $age;
    public function breathe(){
        echo $this->name . ' is breathing';
    }
}

$person = new Person ();

$person ->name = 'Jhon Doe';
$person ->age = 25;

dd($person->breathe());