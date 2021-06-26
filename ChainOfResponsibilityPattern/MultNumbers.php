<?php
require_once 'Chain.php';

class MultNumbers implements Chain
{
    private Chain $nextChain;
    public function setNextChain(Chain $nextChain): void
    {
        $this->nextChain = $nextChain;
    }

    public function calculate(Numbers $num): void
    {
        if ($num->getCalculationWanted() == 'mult') {
            echo "{$num->getNum1()} x {$num->getNum2()} = " . ($num->getNum1() * $num->getNum2()) . PHP_EOL;
        } else {
            $this->nextChain->calculate($num);
        }
    }
}
