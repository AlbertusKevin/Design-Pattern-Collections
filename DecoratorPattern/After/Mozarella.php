<?php
require_once 'ToppingDecorator.php';

class Mozarella extends ToppingDecorator
{
    public function __construct($pizza)
    {
        parent::__construct($pizza);
        echo "Adding Dough\n";
        echo "Adding Mozarella\n";
    }

    public function getDescription()
    {
        return $this->tempPizza->getDescription() . ", Mozarella";
    }
    public function getCost()
    {
        return $this->tempPizza->getCost() + 0.50;
    }
}
