<!-- Source: Derek Banas, youtube, Design Patterns Tutorial -->
<?php
/*
Observer pattern ketika object (subject) maintains sejumlah dependents (observer) dan memberitahukan mereka secara otomatis ketika terjadi perubahan state dengan memanggil method dari observer.

Observer pattern digunakan ketika banyak objek yang kita miliki ingin menerima update ketika object lain berubah. Contoh kasus;
    - Stock Market, memiliki banyak objek pemegang saham dan butuh mengirimkan update ke tiap objek tersebut. Publisher (subject) mengirimkan banyak stocks ke observer (subscriber) yang nantinya akan memilih salah satu yang ingin observer gunakan.

Keuntungannya adalah loose coupling, subject/publisher tidak perlu mengetahui objek mana yang akan ia kirim. Namun, semua observer akan menerima update tersebut, baik mereka akan gunakan atau tidak
*/
require_once 'StockGrabber.php';
require_once 'StockObserver.php';

$stockGrabber = new StockGrabber();

$observer1 = new StockObserver($stockGrabber);

$stockGrabber->setIBMPrice(197.60);
$stockGrabber->setAaplPrice(677.60);
$stockGrabber->setGoogPrice(676.40);

$observer2 = new StockObserver($stockGrabber);

$stockGrabber->setIBMPrice(197.60);
$stockGrabber->setAaplPrice(677.60);
$stockGrabber->setGoogPrice(676.40);

$stockGrabber->unregister($observer1);
?>