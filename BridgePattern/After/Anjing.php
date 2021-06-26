<?php
require_once 'HewanDarat.php';

class Anjing extends HewanDarat
{
    /**
     * @override
     */
    public function getNama(): string
    {
        return 'anjing';
    }
}
