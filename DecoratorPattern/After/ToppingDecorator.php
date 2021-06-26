<?php
require_once 'Pizza.php';
abstract class ToppingDecorator implements Pizza
{
    protected Pizza $tempPizza;

    public function __construct($pizza)
    {
        $this->tempPizza = $pizza;
    }

    public function getDescription()
    {
        return $this->tempPizza->getDescription();
    }

    public function getCost()
    {
        return $this->tempPizza->getCost();
    }
}
