<?php
require_once 'Chain.php';

class DivideNumbers implements Chain
{
    private Chain $nextChain;
    public function setNextChain(Chain $nextChain): void
    {
        $this->nextChain = $nextChain;
    }

    public function calculate(Numbers $num): void
    {
        if ($num->getCalculationWanted() == 'div') {
            echo "{$num->getNum1()} / {$num->getNum2()} = " . ($num->getNum1() / $num->getNum2()) . PHP_EOL;
        } else {
            echo "Only works for add, sub, mult, and div" . PHP_EOL;
        }
    }
}
