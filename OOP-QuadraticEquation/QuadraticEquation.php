<?php

class quadraticEquation
{
    public int $a;
    public int $b;
    public int $c;
    public int $delta;
    public int $r1;
    public int $r2;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

   /* function getA($a): int
    {
        return $this->a;
    }

    function getB($b): int
    {
        return $this->a;
    }

    function getC($c): int
    {
        return $this->a;
    }*/

    function getDiscriminant(): int
    {
        return $this->delta = pow($this->b, 2) - (4 * $this->a * $this->c);
    }

    function getRoot1(): int
    {
        return $this->r1 = ((-$this->b) + (sqrt($this->delta))) / 2 * $this->a;
    }

    function getRoot2(): int
    {
        return $this->r2 = ((-$this->b) - (sqrt($this->delta))) / 2 * $this->a;
    }
    function display(){
        echo "ax2 + bx + x = 0 <br>";
        echo "==>".$this->a . "x2 + " . $this->b . "x + " . $this->c . "= 0 <br>";
    }
}