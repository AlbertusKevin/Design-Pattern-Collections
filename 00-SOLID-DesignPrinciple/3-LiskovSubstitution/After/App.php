<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// Dengan membagi parent class menjadi 2, Fly dan Swim Bird, kita memastikan bahwa semua yang merupakan subclass dari Fly dapat menjalankan function fly dengan baik dan begitu juga dengan Swim bird. Namun terdapat permasalahan kompleks lainnya, dikarenakan sebenarnya Duck bisa berenang dan juga terbang, tetapi extends hanya bisa 1 class. Solusi lain bisa dicapai dengan menggunakan composition seperti trait atau cara lain.

class BirdFly
{
    public function fly()
    {
        echo "I can fly" . PHP_EOL;
    }
}

class BirdSwimming
{
    public function swim()
    {
        echo "I can swim" . PHP_EOL;
    }
}

class Duck extends BirdFly
{
    public function quack()
    {
        echo "I can quack" . PHP_EOL;
    }
}

class Penguin extends BirdSwimming
{
    public function slide()
    {
        echo "Penguin Slide" . PHP_EOL;
    }
}

function makeBirdFlyFlying(BirdFly $bird)
{
    $bird->fly();
}
function makeBirdSwimSwimming(BirdSwimming $bird)
{
    $bird->swim();
}

$duck = new Duck();
$penguin = new Penguin();

makeBirdFlyFlying($duck);
makeBirdSwimSwimming($penguin);
