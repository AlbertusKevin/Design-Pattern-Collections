<?php
require_once 'Binatang.php';

class Hiu implements Binatang
{
    /**
     * @override
     */
    public function getNama(): string
    {
        return 'hiu';
    }

    /**
     * @override
     */
    public function hidupDiAir(): bool
    {
        return true;
    }

    /**
     * @override
     */
    public function hidupDiDarat(): bool
    {
        return false;
    }
}
