<?php
require_once 'CommandAdd.php';
require_once 'CommandMultiply.php';

class AddThenMultiply
{
    private $addCommand;
    private $multCommand;

    public function __construct($valToAdd, $valToMultiply)
    {
        $this->addCommand = new CommandAdd($valToAdd);
        $this->multCommand = new CommandMultiply($valToMultiply);
    }

    public function execute($currentValue)
    {
        $tempVal = $this->addCommand->execute($currentValue);
        return $this->multCommand->execute($tempVal);
    }

    public function undo($currentValue)
    {
        $tempVal = $this->multCommand->undo($currentValue);
        return $this->addCommand->undo($tempVal);
    }
}
