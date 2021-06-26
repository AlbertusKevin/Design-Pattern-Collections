<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
require_once 'Category.php';
// Pada kasus category, terkadang sebuah category bisa memiliki sub categorynya lagi, sehingga yang pada awalnya category tidak memiliki sub category, kita membaginya ke dalam beberapa sub category dan hal ini perlu mengubah kode keseluruhan di bawah ini.
$categories = [
    new Category('Handphone'),
    new Category('Computer'),
    new Category('Fashion'),
];

foreach ($categories as $category) {
    echo $category->getName() . PHP_EOL;
}
