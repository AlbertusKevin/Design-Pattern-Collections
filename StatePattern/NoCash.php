<?php
require_once 'ATMState.php';

class NoCash implements ATMState
{
    private ATMMachine $atmMachine;

    public function __construct(ATMMachine $newAtmMachine)
    {
        $this->atmMachine = $newAtmMachine;
    }

    public function insertCard()
    {
        echo "We Don't have money." . PHP_EOL;
    }

    public function ejectCard()
    {
        echo "We Don't have money." . PHP_EOL;
    }

    public function insertPin(int $pinEntered)
    {
        echo "We Don't have money." . PHP_EOL;
    }

    public function requestCash(int $cashToWithdraw)
    {
        echo "We Don't have money." . PHP_EOL;
    }
}
