<?php
require_once 'Binatang.php';

class Koi implements Binatang
{
    /**
     * @override
     */
    public function getNama(): string
    {
        return 'koi';
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
