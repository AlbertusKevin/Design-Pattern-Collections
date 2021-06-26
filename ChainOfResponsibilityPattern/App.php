<!-- Source: Derek Banas, youtube, Design Patterns Tutorial -->
<?php
// Data yang dikirimkan ke objek, dan jika objek tersebut tidak bisa solve problem atau tidak bisa menggunakan data tersebut, akan di pass ke objek lain.
require_once 'AddNumbers.php';
require_once 'SubstractNumbers.php';
require_once 'DivideNumbers.php';
require_once 'MultNumbers.php';
require_once 'Numbers.php';

$chainCalc1 = new AddNumbers();
$chainCalc2 = new SubstractNumbers();
$chainCalc3 = new MultNumbers();
$chainCalc4 = new DivideNumbers();

$chainCalc1->setNextChain($chainCalc2);
$chainCalc2->setNextChain($chainCalc3);
$chainCalc3->setNextChain($chainCalc4);

$request = new Numbers(4, 2, 'add');
$chainCalc1->calculate($request);

$request = new Numbers(4, 2, 'sub');
$chainCalc1->calculate($request);

$request = new Numbers(4, 2, 'mult');
$chainCalc1->calculate($request);

$request = new Numbers(4, 2, 'div');
$chainCalc1->calculate($request);

$request = new Numbers(4, 2, 'pow');
$chainCalc1->calculate($request);
?>