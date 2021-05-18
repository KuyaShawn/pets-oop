<?php

/** Pet class
 * Represents a pet object with name and color
 * @author Eashune Abenojar
 * @copyright 2021
 */

class Pet
{
    private $_name;
    private $_color;


    /**
     * Pet constructor
     * @param String $name The pet's name, default unknown
     * @param String $color The pet's color, default unknown
     * @return void
     */
    function __construct($name, $color="unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    /**
     * getName() function
     * @return String The pet's name
     */
    function getName()
    {
        return $this->_name;
    }

    /**
     * setName() function
     * @param String $name The pet's name
     * @return void
     */
    function setName($name){
        $this->_name = $name;
    }

    /**
     * getColor() function
     * @return String The pet's Color
     */
    function getColor()
    {
        return $this->_color;
    }

    /**
     * setColor() function
     * @param String $color The pet's color
     * @return void
     */
    function setColor($color){
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