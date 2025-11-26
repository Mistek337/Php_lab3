<?php

namespace App;

class Vector
{
    private $x;
    private $y;

    public function __construct($x = 0, $y = 0){
    
        $this->x = $x;
        $this->y = $y;
    }

    public function length()
    {
        return sqrt($this->x * $this->x + $this->y * $this->y);
    }

    public function Zero(){
    
        return $this->x == 0 && $this->y == 0;
    }

    public function isPerpendicularTo(Vector $other){
    
        return ($this->x * $other->x + $this->y * $other->y) == 0;
    }
}