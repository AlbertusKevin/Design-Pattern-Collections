<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
/* 
    Contoh, kita memiliki sebuah permainan menyusun balok dan terdapat 3 level yang masing-masing
    berbeda tinggi, lebar, judul, akhir, dan karakter dari arena balok tersebut. Ketiganya memiliki
    logic yang sama dalam menyusun balok. Tanpa template method, kita copy setiap logig di setiap objek
    dan hanya mengubah data-data yang dibutuhkan.
*/
$blockGame = new BlockGame();
$blockGame->start();

$blockGame2 = new BlockGame2();
$blockGame2->start();

$blockGame3 = new BlockGame3();
$blockGame3->start();
