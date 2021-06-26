<?php
interface Observer
{
    public function update(float $ibmPrice, float $aaplPrice, float $googPrice): void;
}
