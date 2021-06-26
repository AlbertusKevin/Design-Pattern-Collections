<!-- Source: Derek Banas, youtube, Design Patterns Tutorial -->

<?php
require_once "Dog.php";
require_once "Bird.php";
require_once "Flys.php";
// Strategy Pattern, membuat interface baru yang akan diimplement oleh class-class yang nantinya akan digunakan sebagai composition dari class utama / riil class nya. Pattern ini memungkinkan kita dapat mengganti pewarisan sifat/function yang terdapat pada subclass dari interface tersebut.

// kita buat interface Flys, yang akan digunakan pada class animal sebagai instance variable yang secara dinamis dapat diubah menjadi class ItFlys atau CantFly

// Dengan demikian, kita bisa membuat banyak macam tipe Fly yang impelement dari interface Flys, bisa digunakan oleh class Animal, tanpa harus mengubah class Animal dan subclassnya. Ini yang disebut decoupling, dengan mengenkapsulasi function / behaviour yang bisa beragam dan tidak semua subclass bisa menggunakan behaviour tersebut.

// Dengan ini, kita menghindari duplikasi kode dan mengikuti Liskov Substitution Principle. Kita juga dapat memodifikasi behaviour dari sebuah class secara dinamis.
$sparky = new Dog();
$tweety = new Bird();

echo ($sparky->tryToFly() . PHP_EOL);
echo ($tweety->tryToFly() . PHP_EOL);


// misalkan anjing ternyata tumbuh sayap saat dewasa sehingga dia bisa terbang, kita dapat ganti behaviour awal dia menjadi bisa terbang
$sparky->setFlyingAbility(new ItFlys());
echo ($sparky->tryToFly() . PHP_EOL);

// ternyata anjing terlalu senang terbang hingga merusak sayapnya dan tidak bisa tumbuh lagi, maka kita set menjadi tidak bisa terbang lagi
$sparky->setFlyingAbility(new CantFly());
echo ($sparky->tryToFly() . PHP_EOL);
