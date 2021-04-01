<?php

include "shape.php";

class Circle extends Shape{
    private float $radius;

    public function __construct($color , $isFilled , $radius){
        parent::__construct($color , $isFilled);
        $this->radius = $radius;
    }
    public function setRadius(float $radius):void{
        $this->radius = $radius;
    }
    public function getRadius():float{
        return $this->radius;
    }
    public function getArea():float{
        return pow($this->radius , 2)* pi();
    }
    public function getPerimeter():float{
        return pi() * 2 * $this->radius;
    }
    public function getCircleData(){
        return "<br> Circle Area is {$this->getArea()}
                <br> Circle Perimeter is {$this->getPerimeter()}";
    }
}
$c = new Circle("red" , True , 1.0);
echo $c->getCircleData();