<?php
require_once 'Question.php';
class BooleanQuestion extends Question
{
    public function __construct($description)
    {
        parent::__construct($description);
    }

    public function printQuestion()
    {
        echo "1. True\n2. False" . PHP_EOL;
    }

    public function getDescription()
    {
        return parent::getDescription();
    }
}
