<?php
require_once 'ATMState.php';
class HasCard implements ATMState
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
        if ($pinEntered == 1234) {
            echo "Correct PIN!" . PHP_EOL;
            $this->atmMachine->setCorrectPinEntered(true);
            $this->atmMachine->setATMState($this->atmMachine->getHasPin());
        } else {
            echo "Wrong PIN!" . PHP_EOL;
            $this->atmMachine->setCorrectPinEntered(false);
            echo "Card Ejected!" . PHP_EOL;
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
        }
    }

    public function requestCash(int $cashToWithdraw)
    {
        echo "Enter PIN" . PHP_EOL;
    }
}
