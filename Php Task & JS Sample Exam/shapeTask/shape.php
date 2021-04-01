<?php

class Shape{
    protected string $color;
    protected bool $isFilled;

    public function __construct(string $color , bool $isFilled){
        $this->color = $color;
        $this->isFilled = $isFilled;
    }

    public function setColor(string $color):void{
        $this->color = $color;
    }
    public function setIsFilled(bool $isFilled):void{
        $this->isFilled = $isFilled;
    }
    public function getColor():string{
        return $this->color;
    }
    public function getIsFilled():string{
        return $this->isFilled;
    }
    public function getData():string{
        return "Shape color is {$this->color}
                <br> Is Shape filled? {$this->isFilled}";
    }
}
$s = new Shape("blue" , false);
$s->setColor("Red");
$s->setIsFilled(True);
echo $s->getData();
