<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// kita membuat objek dari implementasi class animal. Misalkan class tiger ini sudah obsolete, dan tidak didukung lagi, artinya semua baris kode di semua file yang membuat objek dari class Tiger ini harus diubah ke kelas yang baru, misalkan dari Tiger menjadi Tiger2

// $tiger = new Tiger(); // objek yang sudah deprecated, ingin kita ganti ke tiger2

$tiger = new Tiger2();

$cat = new Cat();
$dog = new Dog();
