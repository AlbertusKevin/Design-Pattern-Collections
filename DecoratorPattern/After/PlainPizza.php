<?php 
require_once 'Pizza.php';

class PlainPizza implements Pizza{
    public function getDescription()
    {
        return "Thin Dough";
    }

    public function getCost(){
        return 4.00;
    }
}
