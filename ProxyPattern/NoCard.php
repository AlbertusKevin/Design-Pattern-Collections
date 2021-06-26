<?php
require_once 'ATMState.php';

class NoCard implements ATMState
{
    private ATMMachine $atmMachine; 

    public function __construct(ATMMachine $newAtmMachine)
    {
        $this->atmMachine = $newAtmMachine;
    }

    public function insertCard()
    {
        echo "Please Enter a PIN" . PHP_EOL;
        $this->atmMachine->setATMState($this->atmMachine->getHasCardState());
    }

    public function ejectCard()
    {
        echo "Enter Card First." . PHP_EOL;
    }

    public function insertPin(int $pinEntered)
    {
        echo "Enter Card First." . PHP_EOL;
    }

    public function requestCash(int $cashToWithdraw)
    {
        echo "Enter Card First." . PHP_EOL;
    }
}
