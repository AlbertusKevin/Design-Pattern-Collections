<!-- Source: Derek Banas, youtube, Design Patterns Tutorial -->
<?php
// pada contoh kasus ini, kita akan mencoba untuk membuat semua sub class dari animal untuk dapat terbang. Biasanya kita hanya akan menambahkan function fly pada parent class. Namun, semua subclass belum tentu akan menggunakan method tersebut. Bisa saja kita menambahkan method fly tersebut pada class-class yang memang akan menggunakannya, tapi akan ada banyak kode yang duplikat.
require_once 'Animal.php';

$sparky = new Dog();
$tweety = new Bird();
?>