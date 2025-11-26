<?php

namespace App;

class Point
{
    private $x;
    private $y;

    public function __construct(float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

 
    public function moveX(float $delta): void
    {
        $this->x += $delta;
    }

    public function moveY(float $delta): void
    {
        $this->y += $delta;
    }
}