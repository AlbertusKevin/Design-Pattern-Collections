<?php
require_once 'HewanDarat.php';

class Kucing extends HewanDarat
{
    /**
     * @override
     */
    public function getNama(): string
    {
        return 'kucing';
    }
}
