<?php
abstract class BlockTemplate
{
    public abstract function getTitle();
    public abstract function getHeight();
    public abstract function getWidht();
    public abstract function getBlock();
    public abstract function getEndTitle();

    final public function start()
    {
        echo $this->getTitle() . PHP_EOL;

        for ($i = 0; $i < $this->getHeight(); $i++) {
            for ($j = 0; $j < $this->getWidht(); $j++) {
                echo $this->getBlock();
            }
            echo "\n\r";
        }

        echo $this->getEndTitle();
    }
}
