<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
/* 
    Kita menjadikan sebuah objek sebagai prototype, sehingga ketika kita input data, 
    kita gunakan objek prototype tersebut sebagai supplier data, dan kita sesuaiakan
    beberapa input data yang dibutuhkan. Kita dapat clone objek-objek sebelumnya yang sudah dibuat,
    dengan memilih objek mana yang memiliki kedekatan data yang sama
 */

//nama1, city1, country2, category1
$store1 = new Store('nama1', 'city1', 'country2', 'category1');

//nama2, city2, country2, category2
$store2 = $store1->clone();
$store2->setName('nama2');
$store2->setCity('city2');
$store2->setCategory('category2');

//nama3, city2, country2, category2
$store3 = $store2->clone();
$store3->setName('nama3');

//nama4, city1, country2, category1
$store4 = $store1->clone();
$store4->setName('nama4');
