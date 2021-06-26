<!-- Source: Derek Banas, youtube, Design Patterns Tutorial -->

<?php
/*
        sebuah class yang akan membatas akses ke class lainnya. Digunakan untuk keamanan, karena object intensif untuk dibuat atau diakses dari remote location.

        Membuat class baru sebagai penghubung terhadap class riilnya untuk membatasi pengambilan atau pengaksesan attr dan method dari class tersebut. Keduanya implement ke interface yang sama sehingga bisa dilakukan polymorphisme.
    */

require_once 'ATMMachine.php';
require_once 'ATMProxy.php';

$atmMachine = new ATMMachine();

$atmMachine->insertCard();
$atmMachine->ejectCard();
$atmMachine->insertCard();
$atmMachine->insertPin(1234);
$atmMachine->requestCash(2000);
$atmMachine->insertCard();
$atmMachine->insertPin(1234);

$atmProxy = new ATMProxy($atmMachine);

// echo "\nCurrent ATM State {$atmProxy->getATMData()}" . PHP_EOL;
echo "Cash in ATM $ {$atmProxy->getCashInMachine()}" . PHP_EOL;
