<?php
class Calculator
{
    private $value = 0;

    public function add($num)
    {
        $this->value += $num;
    }
    public function subtract($num)
    {
        $this->value -= $num;
    }
    public function divide($num)
    {
        $this->value /= $num;
    }
    public function multiply($num)
    {
        $this->value *= $num;
    }

    public function getValue()
    {
        return $this->value;
    }
}
