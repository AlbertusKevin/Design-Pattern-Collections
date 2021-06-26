<?php
require_once 'Binatang.php';

class Lele implements Binatang
{
    /**
     * @override
     */
    public function getNama(): string
    {
        return 'lele';
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
