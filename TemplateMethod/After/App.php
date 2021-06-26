<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
require_once 'BlockGame.php';
require_once 'BlockGame2.php';
require_once 'BlockGame3.php';
/* 
    Dengan template method, buat sebuah class abstract yang akan diimplement oleh objek-objek tersebut.
    Class tersebut kita isikan sebuah fungsi yang final agar memastikan tidak dirubah oleh class yang implement template tersebut
    dan kita buat abstract method yang wajib diimplement class lain untuk mengganti data yang dibutuhkan
*/
$blockGame = new BlockGame();
$blockGame->start();

echo PHP_EOL;
echo PHP_EOL;

$blockGame2 = new BlockGame2();
$blockGame2->start();

echo PHP_EOL;
echo PHP_EOL;

$blockGame3 = new BlockGame3();
$blockGame3->start();
