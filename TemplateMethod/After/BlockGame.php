<?php
require_once 'BlockTemplate.php';

class BlockGame extends BlockTemplate
{
    public function getTitle()
    {
        return "Block Game";
    }
    public function getHeight()
    {
        return 10;
    }
    public function getWidht()
    {
        return 10;
    }
    public function getBlock()
    {
        return "x";
    }
    public function getEndTitle()
    {
        return "Finish Block Game";
    }
}
