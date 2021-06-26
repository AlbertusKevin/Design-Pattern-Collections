<?php
require_once 'BlockTemplate.php';

class BlockGame2 extends BlockTemplate
{
    public function getTitle()
    {
        return "Block Game 2";
    }
    public function getHeight()
    {
        return 20;
    }
    public function getWidht()
    {
        return 20;
    }
    public function getBlock()
    {
        return "o";
    }
    public function getEndTitle()
    {
        return "Finish Block Game 2";
    }
}
