<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// Adapter pattern, akan menggeneralkan class-class yang berbeda tersebut, sehingga bisa menangani data-data yang berbeda dengan cara yang sama.

// 1. Kita buat sebuah interface adapter yang general untuk diimplement di tiap class adapter per tipe class
// 2. Kita buat class adapter untuk tiap tipe produk yang implement interface di no. 1
// 3. Ubah cara pembuatan objek / data yang akan ditampilkan
require_once 'Book.php';
require_once 'Screencast.php';
require_once 'BookCatalogAdapter.php';
require_once 'ScreencastCatalogAdapter.php';
require_once 'CatalogAdapter.php';

$product = [];

$product[] = new BookCatalogAdapter(new Book('title 1', 'author 1'));
$product[] = new BookCatalogAdapter(new Book('title 2', 'author 2'));
$product[] = new BookCatalogAdapter(new Book('title 3', 'author 3'));

$product[] = new ScreencastCatalogAdapter(new Screencast('title 1', 'author 1', 100));
$product[] = new ScreencastCatalogAdapter(new Screencast('title 2', 'author 2', 200));
$product[] = new ScreencastCatalogAdapter(new Screencast('title 3', 'author 3', 150));

// 4. Untuk menampilkan data, tidak perlu lagi dilakukan pengecekan, karena setiap adapter memiliki method yang sama dengan behaviour yang berbeda-beda. Jika kita ingin menambah produk baru, kita cukup membuat adapter baru, tanpa harus mengubah cara menampilkan katalog. 
foreach ($product as $item) {
    echo $item->getTitleProduct() . PHP_EOL;
}

// Jika kita menambah produk baru, kita akan menambah pengecekan manual seperti ini. Terlebih jika kita memiliki kode seperti ini di file lain, sehingga kita harus menambahkan di setiap halaman tersebut.
