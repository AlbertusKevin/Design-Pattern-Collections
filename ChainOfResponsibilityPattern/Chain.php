<?php
interface Chain
{
    public function setNextChain(Chain $nextChain): void;
    public function calculate(Numbers $num): void;
}
