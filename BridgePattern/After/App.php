<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// Dengan membuat class jembatan antara interface dengan class real nya, kita dapat dengan mudah membuat method atau fungsi yang spesifik terhadap pembagian 2 class tersebut, sebagai contoh sebelumnya kita menambahkan fungsi getJumlahKaki() pada tiap class yang hidup di darat. Dengan adanya class jembatan, kita cukup menambahkan di class tersebut, yang kemudian class realnya mengimplementasi atau turunan dari class jembatan tersebut.

require_once 'Hiu.php';
require_once 'Anjing.php';
require_once 'Kucing.php';
require_once 'Kambing.php';
require_once 'Lele.php';
require_once 'Koi.php';
require_once 'HewanAir.php';

$binatang = [
    new Hiu(),
    new Koi(),
    new Lele(),
    new Anjing(),
    new Kucing(),
    new Kambing(),
];

foreach ($binatang as $animal) {
    if ($animal instanceof HewanAir) {
        echo "{$animal->getNama()} hidup di air {$animal->jenisAir('tawar')}" . PHP_EOL;
    } else {
        echo "{$animal->getNama()} hidup di darat dengan jumlah kaki {$animal->getJumlahKaki()}" . PHP_EOL;
    }
}
