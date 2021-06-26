<?php
require_once 'Binatang.php';

class Kucing implements Binatang
{
    /**
     * @override
     */
    public function getNama(): string
    {
        return 'kucing';
    }

    /**
     * @override
     */
    public function hidupDiAir(): bool
    {
        return false;
    }

    /**
     * @override
     */
    public function hidupDiDarat(): bool
    {
        return true;
    }

    public function getJumlahKaki(): int
    {
        return 4;
    }
}
