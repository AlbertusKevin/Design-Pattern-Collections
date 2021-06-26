<?php
abstract class Pizza
{
    public abstract function setDescription($desc);
    public abstract function getDescription();
    public abstract function getCost();
    public abstract function hasFontina();
}
