<?php
require_once 'Animal.php';
require_once 'Flys.php';

class Dog extends Animal
{
    public function __construct()
    {
        parent::setSound('Bark');
        // pada class dog, kita set bahwa anjing tidak bisa terbang
        parent::setFlyingAbility(new CantFly());
    }

    public function digHole()
    {
        echo "Dug a Hole" . PHP_EOL;
    }

    // override method fly dari parent class
    public function fly(): void
    {
        echo "Sorry, sky not for me.";
    }
}
