<?php

include "rect.php";

class Square extends Rectangle{
    private double $side;

    public function __construct($color , $isFilled , $width , $length , $side){
        parent::__construct($color , $isFilled , $width , $length);
        $this->side = $side;
    }
    public function setSide(double $side):void{
        $this->side = $side;
    }
    public function getSide():double{
        return $this->side;
    }
    public function setWidth(double $side):void{
        $this->side = $side;
    }
    public function setLength(double $side):void{
        $this->side = $side;
    }
}
$sqr = new $Square("red" , true , 1.0 , 1.0 , 1.0);
$sqr->getData();