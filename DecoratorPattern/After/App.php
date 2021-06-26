<!-- Source: Derek Banas, youtube, Design Patterns Tutorial -->
<?php
/*
    Decorator pattern membuat sebuah interface pizza, yang akan diimplement oleh class PlainPizza dan ToppingDecorator. Ketika ingin membuat pizza, maka seperti komponene, kita tinggal menambahkan saja class yang kita butuhkan (Actual Topping Class yang implement topping decorator) dan ketika membuat objek pizza, kita gunakan objek toping sebagai parameter sehingga akan bertumpuk.
*/
require_once 'TomatoSauce.php';
require_once 'Mozarella.php';
require_once 'PlainPizza.php';

$pizza1 = new TomatoSauce(new Mozarella(new PlainPizza()));
echo "Ingredients: {$pizza1->getDescription()}\n";
echo "Price: {$pizza1->getCost()}\n";

$pizza2 = new TomatoSauce(new PlainPizza());
echo "Ingredients: {$pizza2->getDescription()}\n";
echo "Price: {$pizza2->getCost()}\n";

$pizza3 = new Mozarella(new PlainPizza());
echo "Ingredients: {$pizza3->getDescription()}\n";
echo "Price: {$pizza3->getCost()}\n";

$pizza4 = new PlainPizza();
echo "Ingredients: {$pizza4->getDescription()}\n";
echo "Price: {$pizza4->getCost()}\n";
?>