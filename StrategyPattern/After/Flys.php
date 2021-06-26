<?php
interface Flys
{
    public function fly(): string;
}

class ItFlys implements Flys
{
    public function fly(): string
    {
        return "Enjoy the sky.";
    }
}

class CantFly implements Flys
{
    public function fly(): string
    {
        return "Love the ground.";
    }
}
