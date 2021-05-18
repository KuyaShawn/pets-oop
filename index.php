<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once ('vendor/autoload.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Define routes
$f3->route('GET /', function(){
    echo '<h1>Hello, Pets!</h1>';

    //Instantiate a pet object
    $pet1 = new Pet("Fido","Pink");

    //Test setter and getter
    $pet1->setName("Fifi");
    echo "My pet's name is ". $pet1->getName();

    echo "<br>";

    $pet1->setColor("Green");
    echo "Color of my pet is ". $pet1->getColor();

    echo"<pre>";
    var_dump($pet1);
    echo"</pre>";
    //$pet1 = new Pet();
    //$pet1 = new Pet(null,"pink");

    //Invoke the methods
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();

    $dog1 = new Dog("Riley", "brown");
    echo"<pre>";
    var_dump($dog1);
    echo"</pre>";
    $dog1->fetch(); //invoke a method defined in child
    $dog1->eat(); //invoke an inherited method

    $cat1 = new Cat("meow", "brown");
    $cat1->eat();
    $cat1->scratch();

});

//Run Fat-Free
$f3->run();