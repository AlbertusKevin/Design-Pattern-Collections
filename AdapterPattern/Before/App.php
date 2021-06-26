<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// contoh kasus, kita memiliki beberapa jenis produk yang berbeda, dan kita ingin menampilkan katalog semua jenis produk dalam satu halaman yang sama
require_once 'Book.php';
require_once 'Screencast.php';
// 1. Kita load data, asumsikan data dari database pada kasus nyatanya
$product = [];

$product[] = new Book('title 1', 'author 1');
$product[] = new Book('title 2', 'author 2');
$product[] = new Book('title 3', 'author 3');

$product[] = new Screencast('title 1', 'author 1', 100);
$product[] = new Screencast('title 2', 'author 2', 200);
$product[] = new Screencast('title 3', 'author 3', 150);

// 2. display pada katalognya, namun problemnya, kita memiliki 2 jenis produk dengan attribute yang berbeda, sehingga kita harus mengecek terlebih dahulu tipe produknya apa sebelum menampilkan data
foreach ($product as $item) {
    if ($item instanceof Book) {
        echo "Title: {$item->getTitle()} \nAuthor: {$item->getAuthor()}" . PHP_EOL;
    } else if ($item instanceof ScreenCast) {
        echo "Title: {$item->getTitle()} \nAuthor: {$item->getAuthor()} \nDuration: {$item->getDuration()}" . PHP_EOL;
    }
}

// Jika kita menambah produk baru, kita akan menambah pengecekan manual seperti ini. Terlebih jika kita memiliki kode seperti ini di file lain, sehingga kita harus menambahkan di setiap halaman tersebut.
