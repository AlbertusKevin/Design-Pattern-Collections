<?php

class Game
{
    private $level;
    private $arena;

    public function __construct(Level $level, Arena $arena)
    {
        $this->level = $level;
        $this->arena = $arena;
    }


    function start()
    {
        $this->level->start();
        $this->arena->start();
    }
}
