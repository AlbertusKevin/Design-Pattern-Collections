<?php
require_once 'HewanDarat.php';

class Kambing extends HewanDarat
{
    /**
     * @override
     */
    public function getNama(): string
    {
        return 'kambing';
    }
}
