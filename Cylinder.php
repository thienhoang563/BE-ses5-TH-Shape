<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 25/01/2019
 * Time: 14:03
 */
include_once ('Circle.php');
class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius,$height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter()* $this->height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
}