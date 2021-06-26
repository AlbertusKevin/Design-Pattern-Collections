<?php
class Calculator
{
    private $value = 0;
    private $history = [];

    public function executeCommand($command)
    {
        $this->value = $command->execute($this->value);
        $this->history[] = $command;
    }

    public function undoCommand()
    {
        $command = array_pop($this->history);
        $this->value = $command->undo($this->value);
    }

    public function setValue($val)
    {
        $this->value = $val;
    }

    public function getValue()
    {
        return $this->value;
    }
}
