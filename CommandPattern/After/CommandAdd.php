<?php
class CommandAdd
{
    private $valueToAdd;

    public function __construct($valueToAdd)
    {
        $this->valueToAdd = $valueToAdd;
    }

    public function execute($currentValue)
    {
        return $this->valueToAdd + $currentValue;
    }

    public function undo($currentValue)
    {
        return $currentValue - $this->valueToAdd;
    }
}
