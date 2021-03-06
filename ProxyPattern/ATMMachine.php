<?php

require_once 'ATMState.php';
require_once 'GetATMData.php';
require_once 'HasPin.php';
require_once 'HasCard.php';
require_once 'NoCard.php';
require_once 'NoCash.php';

class ATMMachine implements GetATMData
{
    private ATMState $hasCard;
    private ATMState $noCard;
    private ATMState $hasCorrectPin;
    private ATMState $atmOutOfMoney;

    private ATMState $atmState;

    private int $cashInMachine = 2000;
    private bool $correctPinEntered = false;

    public function __construct()
    {
        $this->hasCard = new HasCard($this);
        $this->noCard = new NoCard($this);
        $this->hasCorrectPin = new HasPin($this);
        $this->atmOutOfMoney = new NoCash($this);

        $this->atmState = $this->noCard;

        if ($this->cashInMachine < 0) {
            $this->atmState = $this->atmOutOfMoney;
        }
    }

    public function setATMState(ATMState $newATMState)
    {
        $this->atmState = $newATMState;
    }

    public function setCashInMachine(int $newCashInMachine)
    {
        $this->cashInMachine = $newCashInMachine;
    }

    public function getCashInMachine(): int
    {
        return $this->cashInMachine;
    }

    public function getATMData(): ATMState
    {
        return $this->atmState;
    }

    public function insertCard()
    {
        $this->atmState->insertCard();
    }

    public function ejectCard()
    {
        $this->atmState->ejectCard();
    }

    public function requestCash(int $cashToWithdraw)
    {
        $this->atmState->requestCash($cashToWithdraw);
    }

    public function insertPin(int $pinEntered)
    {
        $this->atmState->insertPin($pinEntered);
    }

    public function getHasCardState(): ATMState
    {
        return $this->hasCard;
    }

    public function getNoCardState(): ATMState
    {
        return $this->noCard;
    }

    public function getHasPin(): ATMState
    {
        return $this->hasCorrectPin;
    }

    public function getNoCashState(): ATMState
    {
        return $this->atmOutOfMoney;
    }

    public function getCorrectPinEntered()
    {
        return $this->correctPinEntered;
    }
    public function setCorrectPinEntered($correctPinEntered)
    {
        $this->correctPinEntered = $correctPinEntered;
    }
}
