<?php
require_once 'Question.php';
class RangeQuestion extends Question
{
    public function __construct($description)
    {
        parent::__construct($description);
    }

    public function printQuestion()
    {
        echo "Minimum: " . PHP_EOL;
        echo "Maximum: " . PHP_EOL;
    }

    public function getDescription()
    {
        return parent::getDescription();
    }
}
