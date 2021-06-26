<?php
interface GetATMData
{
    public function getATMData(): ATMState;
    public function getCashInMachine(): int;
}
