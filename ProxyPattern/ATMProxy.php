<?php
require_once 'ATMMachine.php';
require_once 'GetATMData.php';

class ATMProxy implements GetATMData
{
    private $machine;

    public function __construct(ATMMachine $atmMachine)
    {
        $this->machine = $atmMachine;
    }

    public function getATMData(): ATMState
    {
        return $this->machine->getATMData();
    }

    public function getCashInMachine(): int
    {
        return $this->machine->getCashInMachine();
    }
}
