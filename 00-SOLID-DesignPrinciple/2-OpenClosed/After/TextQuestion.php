<?php
require_once 'Question.php';
class TextQuestion extends Question
{
    public function __construct($description)
    {
        parent::__construct($description);
    }
    public function printQuestion()
    {
        echo "Answer: ________________________" . PHP_EOL;
    }

    public function getDescription()
    {
        return parent::getDescription();
    }
}
