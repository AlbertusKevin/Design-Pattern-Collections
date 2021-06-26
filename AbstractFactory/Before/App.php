<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// Jika kita membuat sebuah game dengan level easy, maka kita memasukkan level dan arena yang sama-sama easy, maka antar parameter ada dependency.
// Dengan membuat objek seperti ini, kita dapat salah memasukkan data karena level dan arena merupakan dua parameter yang terpisah (Level easy, Arena Medium).
// Dengan factory method, kita buat factory per objek, yaitu level dan arena, tapi tetap saja 2 parameter tersebut terpisah. 
$gameEasy = new Game(new LevelEasy(), new ArenaEasy());
$gameEasy->start();

$gameMedium = new Game(new LevelMedium(), new ArenaMedium());
$gameMedium->start();

$gameHard = new Game(new LevelHard(), new ArenaHard());
$gameHard->start();
