<?php
require_once 'Pizza.php';

class ThreeCheesePizza extends Pizza
{
    public function setDescription($desc)
    {
    }

    public function getDescription()
    {
        return "Mozarella, Fontina, Parmesan, Cheese Pizza";
    }

    public function hasFontina()
    {
    }

    public function getCost()
    {
        return 10.00;
    }
}
