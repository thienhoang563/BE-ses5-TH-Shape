<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 25/01/2019
 * Time: 14:09
 */
include_once ('Shape.php');
class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name,$width,$height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->width * $this->height;
    }

    public function calculatePerimeter(){
        return ($this->height+$this->width) * 2;
    }
}