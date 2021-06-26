<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// Dengan builder, kita dapat lebih fleksibel untuk membuat objek dengan
// atribute value, tanpa harus mencocokkan kesesuaian argumen dengan parameter constructor objeknya
$customer1 = (new CustomerBuilder())
    ->setName('name')
    ->setEmail('email')
    ->build();
$customer2 = (new CustomerBuilder())
    ->setName('name')
    ->setAddress('email')
    ->build();
$customer3 = (new CustomerBuilder())
    ->setName('name')
    ->build();
