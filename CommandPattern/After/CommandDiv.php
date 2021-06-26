<?php
class CommandDiv
{
    private $valueToDiv;

    public function __construct($valueToDiv)
    {
        $this->valueToDiv = $valueToDiv;
    }

    public function execute($currentValue)
    {
        return $currentValue / $this->valueToDiv;
    }

    public function undo($currentValue)
    {
        return $currentValue * $this->valueToDiv;
    }
}
