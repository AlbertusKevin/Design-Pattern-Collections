<?php
require_once 'Binatang.php';

abstract class HewanAir implements Binatang
{
    public function hidupDiAir(): bool
    {
        return true;
    }

    public function hidupDiDarat(): bool
    {
        return false;
    }

    public function jenisAir($air)
    {
        return $air;
    }
}
