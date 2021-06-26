<?php
class CommandSubs
{
    private $valueToSubs;

    public function __construct($valueToSubs)
    {
        $this->valueToSubs = $valueToSubs;
    }

    public function execute($currentValue)
    {
        return $currentValue - $this->valueToSubs;
    }

    public function undo($currentValue)
    {
        return $currentValue + $this->valueToSubs;
    }
}
