<?php
class CommandMultiply
{
    private $valueToMultiply;

    public function __construct($valueToMultiply)
    {
        $this->valueToMultiply = $valueToMultiply;
    }

    public function execute($currentValue)
    {
        return $this->valueToMultiply * $currentValue;
    }

    public function undo($currentValue)
    {
        return $currentValue / $this->valueToMultiply;
    }
}
