<?php
require_once 'Animal.php';

class Dog extends Animal
{
    public function __construct()
    {
        parent::setSound('Bark');
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
