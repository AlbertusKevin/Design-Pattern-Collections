<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// Dengan adanya factory method, kita hanya perlu mengganti nama classnya di class factory saja, tidak di semua file yang new Class tersebut. Untuk membuat objeknya, menggunakan method dari class factory.

$tiger = AnimalFactory::createObjectAnimal('tiger');
$cat = AnimalFactory::createObjectAnimal('cat');
$dog = AnimalFactory::createObjectAnimal('dog');
