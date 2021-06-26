<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
require_once 'Calculator.php';

$calc = new Calculator();
$calc->add(10);
echo $calc->getValue() . PHP_EOL;
$calc->divide(3);
echo $calc->getValue() . PHP_EOL;
