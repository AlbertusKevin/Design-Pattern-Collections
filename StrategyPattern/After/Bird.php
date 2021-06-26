<?php
require_once 'Animal.php';

class Bird extends Animal
{
    public function __construct()
    {
        parent::setSound('Chirp');
        parent::setFlyingAbility(new ItFlys());
    }
}
