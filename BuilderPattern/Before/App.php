<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// Ketika membuat objek, kita akan menggunakan constructor dan melempar argument yang
// berurutan dan sesuia dengan parameter constructornya. Hal ini menjadikan tidak fleksibel
// ketika ingin membuat sebuah objek yang beberapa fieldnya kosong atau ketika ingin menambah atribut objek
// karena kita perlu menyesuaikan argument dan paramater constructornya.
$customer1 = new Customer('email', 'name', 'phone', 'address');
$customer2 = new Customer('', 'name', '', 'address');
$customer2 = new Customer('', 'name');
