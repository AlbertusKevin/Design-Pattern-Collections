<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// Dengan factor method, kita cukup masukkan data yang tidak distinct, 
// sehingga memastikan data salary dan manager tidak salah input.

$emp1 = EmployeeFactory::createManager('name1');
$emp2 = EmployeeFactory::createManager('name2');
$emp3 = EmployeeFactory::createStaff('name3');
$emp4 = EmployeeFactory::createStaff('name4');
