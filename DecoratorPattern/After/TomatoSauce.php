<?php
require_once 'ToppingDecorator.php';

class TomatoSauce extends ToppingDecorator
{
    public function __construct($pizza)
    {
        parent::__construct($pizza);
        echo "Adding Tomato Sauce\n";
    }

    public function getDescription()
    {
        return $this->tempPizza->getDescription() . ", Tomato Sauce";
    }
    public function getCost()
    {
        return $this->tempPizza->getCost() + 0.35;
    }
}
