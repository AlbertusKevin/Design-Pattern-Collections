<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// Terdapat beberapa input data yang sama ketika ingin membuat objek, seperti country, city, dan category.
$store1 = new Store('nama1', 'city1', 'country2', 'category1');
$store2 = new Store('nama2', 'city2', 'country2', 'category1');
$store3 = new Store('nama3', 'city1', 'country1', 'category2');
$store4 = new Store('nama4', 'city2', 'country1', 'category2');
