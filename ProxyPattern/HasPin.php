<?php
require_once 'ATMState.php';

class HasPin implements ATMState
{
    private ATMMachine $atmMachine;

    public function __construct(ATMMachine $newAtmMachine)
    {
        $this->atmMachine = $newAtmMachine;
    }

    public function insertCard()
    {
        echo "You can't enter more than one card!" . PHP_EOL;
    }

    public function ejectCard()
    {
        echo "Card ejected." . PHP_EOL;
        $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
    }

    public function insertPin(int $pinEntered)
    {
        echo "PIN already entered." . PHP_EOL;
    }

    public function requestCash(int $cashToWithdraw)
    {
        if ($cashToWithdraw > $this->atmMachine->getCashInMachine()) {
            echo "Don't Have that cash." . PHP_EOL;
            echo "Card ejected." . PHP_EOL;
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
        } else {
            echo "$cashToWithdraw is provided by the machine." . PHP_EOL;
            $this->atmMachine->setCashInMachine($this->atmMachine->getCashInMachine() - $cashToWithdraw);

            echo "Card ejected." . PHP_EOL;
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());

            if ($this->atmMachine->getCashInMachine() <= 0) {
                $this->atmMachine->setATMState($this->atmMachine->getNoCashState());
            }
        }
    }
}
