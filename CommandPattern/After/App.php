<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// Command pattern, memisahkan setiap method atau fungsi dalam suatu class (substract, add, multuiply, divide) menjadi fungsi tersendiri dan setiap fungsi tersebut memiliki method undo dan do. Antar fungsi tersebut dapat dikombinasikan dengan membuat class baru. Pattern ini dapat digunakan pada kasus nyata seperti insert data ke database, pada fungsi rollback. Jika gagal, maka operasi db sebelumnya bisa diundo
require_once 'Calculator.php';
require_once 'CommandAdd.php';
require_once 'CommandDiv.php';
require_once 'CommandSubs.php';
require_once 'CommandMultiply.php';
require_once 'AddThenMultiply.php';

$calc = new Calculator();

$valueToAdd = 100;
$addCommand = new CommandAdd($valueToAdd);
$calc->executeCommand($addCommand);
echo $calc->getValue() . PHP_EOL;
$calc->undoCommand();
echo $calc->getValue() . PHP_EOL;
$calc->executeCommand(new AddThenMultiply(10, 2));
echo $calc->getValue() . PHP_EOL;
$calc->undoCommand(new AddThenMultiply(10, 2));
echo $calc->getValue() . PHP_EOL;
