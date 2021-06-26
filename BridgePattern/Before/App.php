<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// pada implementasi ini, kita memiliki 6 class implementasi langsung dari interface Binatang. Namun, jika dilihat lagi, terdapat 2 kelompok dari class-class tersebut, yaitu Hewan Darat dan Hewan Air. Lebih baik, kita buat sebuah class abstract yang menjembatani antara interface Binatang yang bersifat umum dengan class-class implementasinya.

require_once 'Hiu.php';
require_once 'Anjing.php';
require_once 'Kucing.php';
require_once 'Kambing.php';
require_once 'Lele.php';
require_once 'Koi.php';

$binatang = [
    new Hiu(),
    new Koi(),
    new Lele(),
    new Anjing(),
    new Kucing(),
    new Kambing(),
];

foreach ($binatang as $animal) {
    if ($animal->hidupDiAir()) {
        echo "{$animal->getNama()} hidup di air" . PHP_EOL;
    } else {
        echo "{$animal->getNama()} hidup di darat dengan jumlah kaki {$animal->getJumlahKaki()}" . PHP_EOL;
    }
}
