<?php

class Cat extends Pet
{
    private $_name;

    function eat()
    {
        echo "{$this->getName()} is eating<br>";
    }

    function scratch()
    {
        echo "{$this->getName()} is scratchiing<br>";
    }
}