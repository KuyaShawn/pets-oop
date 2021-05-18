<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once ('vendor/autoload.php');

//Require the file that defines the pet class
require ('pet.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Define routes
$f3->route('GET /', function(){
    echo '<h1>Hello, Pets!</h1>';

    //Instantiate a pet object
    $pet1 = new Pet("Fido","Pink");
    //$pet1 = new Pet();
    //$pet1 = new Pet(null,"pink");

    //Invoke the methods
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();



});

//Run Fat-Free
$f3->run();