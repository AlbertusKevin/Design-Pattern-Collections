<?php

interface Enemy
{
    function start();
}

class EnemyEasy implements Enemy
{
    public function start()
    {
        echo "Enemy easy";
    }
}
class EnemyMedium implements Enemy
{
    public function start()
    {
        echo "Enemy Medium";
    }
}
class EnemyHard implements Enemy
{
    public function start()
    {
        echo "Enemy Hard";
    }
}
