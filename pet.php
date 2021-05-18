<?php

//pet.php

class Pet
{
    private $_name;
    private $_color;


    //Parameterized constructor
    function __construct($name, $color="unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    // all three works when invoking the variables
    function eat()
    {
        echo "$this->_name is eating <br>";
    }

    function talk()
    {
        echo "{$this->_name} is talking</br>";
    }

    function sleep()
    {
        echo $this->_name." is sleeping</br>";
    }
}