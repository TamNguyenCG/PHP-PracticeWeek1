<?php

class quadraticEquation
{
    public int $a;
    public int $b;
    public int $c;
    public int $delta;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->delta =(pow($this->b,2)) - (4 * $this->a * $this->c);
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function getC(): int
    {
        return $this->c;
    }

    public function getDiscriminant(): int
    {
        return $this->delta;
    }

    public function getRoot1(): int
    {
        return ((-$this->b) + (sqrt($this->delta))) / 2 * $this->a;
    }

    public function getRoot2(): int
    {
        return ((-$this->b) - (sqrt($this->delta))) / 2 * $this->a;
    }
}