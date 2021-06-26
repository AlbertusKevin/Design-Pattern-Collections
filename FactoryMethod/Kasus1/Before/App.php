<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// Ketika membuat objek seperti employee, role nya terbatas, antara manager atau staff
// begitupun salary nya yang sesuai dengan rolenya. Jika sebuah value dari attribute dari sebuah objek
// hanya terbatas pilihannya seperti ini, ada baiknya kita tidak membuat objek secara manual, tujuannya
// agar terstandard sehingga ketika kita membuat objek, cukup memberikan data yang dibutuhkan.

$emp1 = new Employee('nama1', 'manager', 20000000);
$emp2 = new Employee('nama2', 'manager', 20000000);
$emp3 = new Employee('nama3', 'staff', 10000000);
$emp4 = new Employee('nama4', 'staff', 10000000);
