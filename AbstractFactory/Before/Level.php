<?php

interface Level
{
    function start();
}

class LevelEasy implements Level
{
    public function start()
    {
        echo "Level easy";
    }
}
class LevelMedium implements Level
{
    public function start()
    {
        echo "Level Medium";
    }
}
class LevelHard implements Level
{
    public function start()
    {
        echo "Level Hard";
    }
}
