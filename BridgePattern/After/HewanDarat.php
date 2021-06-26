<?php
require_once 'Binatang.php';

abstract class HewanDarat implements Binatang
{
    public function hidupDiAir(): bool
    {
        return false;
    }

    public function hidupDiDarat(): bool
    {
        return true;
    }

    public function getJumlahKaki(): int
    {
        return 4;
    }
}
