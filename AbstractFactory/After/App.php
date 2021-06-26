<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
/* 
    Dengan seperti ini, kita bisa memastikan bahwa objek yang dibuat berisi data yang tepat seperti ketika game easy,
    dapat dipastikan level dan arena akan sama-sama berada pada tingkat easy. Keuntungan lain adalah, 
    misalkan di game ini kita menambah class baru enemy di game dari semula hanya level dan arena,
    kita cukup menambahkan dibagian interface game factorynya saja, tanpa perlu menambah satu-satu setiap baris kode
    yang membuat objek game.
*/

$gameEasy = new Game(new GameFactoryEasy());
$gameEasy->start();

$gameMedium = new Game(new GameFactoryMedium());
$gameMedium->start();

$gameHard = new Game(new GameFactoryHard());
$gameHard->start();
