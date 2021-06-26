<?php
class BlockGame2
{
    public function start()
    {
        echo "Block Game 2";

        for ($i = 0; $i < 20; $i++) {
            for ($j = 0; $j < 20; $j++) {
                echo "o";
            }
            echo "\n\r";
        }

        echo "Finish Block Game 2";
    }
}
