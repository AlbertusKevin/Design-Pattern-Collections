<?php
require_once 'Question.php';
class MultipleChoice extends Question
{
    private $options;

    public function __construct($description, $options)
    {
        parent::__construct($description);
        $this->options = $options;
    }
    public function printQuestion()
    {
        $index = 1;
        foreach ($this->options as $option) {
            echo "$index. $option" . PHP_EOL;
            $index++;
        }
    }

    public function getDescription()
    {
        return parent::getDescription();
    }
}
