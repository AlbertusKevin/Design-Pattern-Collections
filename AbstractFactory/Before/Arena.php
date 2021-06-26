<?php

interface Arena
{
    function start();
}

class ArenaEasy implements Arena
{
    public function start()
    {
        echo "Arena easy";
    }
}
class ArenaMedium implements Arena
{
    public function start()
    {
        echo "Arena Medium";
    }
}
class ArenaHard implements Arena
{
    public function start()
    {
        echo "Arena Hard";
    }
}
