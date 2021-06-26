<?php
abstract class Question
{
    protected $descriptions;

    public function __construct($descriptions)
    {
        $this->descriptions = $descriptions;
    }

    public abstract function printQuestion();

    public function getDescription()
    {
        return $this->descriptions;
    }
}
