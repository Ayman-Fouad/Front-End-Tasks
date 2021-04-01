<?php

include "shape.php";

class Rectangle extends Shape{
    protected float $width;
    protected float $length;

    public function __construct($color , $isFilled , $width , $length){
        parent::__construct($color , $isFilled);
        $this->width = $width;
        $this->length = $length;
    }
    public function setWidth(float $width):void{
        $this->width = $width;
    }
    public function setLength(float $length):void{
        $this->length = $length;
    }
    public function getWidth():float{
        return $this->width;
    }
    public function getLength():float{
        return $this->length;
    }
    public function getArea():float{
        return ($this->length*$this->width);
    }
    public function getPerimeter():float{
        return 2*($this->length + $this->width);
    }
    public function getRectData(){
        return "<br< Rect Area is {$this->getArea()}
                <br> Rect Perimeter is {$this->getPerimeter()}";
    }
}
$rect = new Rectangle("Red" , True , 1.0 , 1.0 , 1.0);
echo $rect->getRectData();