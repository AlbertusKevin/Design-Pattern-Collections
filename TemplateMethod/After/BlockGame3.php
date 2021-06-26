<?php
require_once 'BlockTemplate.php';

class BlockGame3 extends BlockTemplate
{
    public function getTitle()
    {
        return "Block Game 3";
    }
    public function getHeight()
    {
        return 30;
    }
    public function getWidht()
    {
        return 20;
    }
    public function getBlock()
    {
        return "0";
    }
    public function getEndTitle()
    {
        return "Finish Block Game 3";
    }
}
