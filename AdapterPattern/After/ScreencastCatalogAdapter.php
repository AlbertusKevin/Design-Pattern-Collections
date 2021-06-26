<?php
require_once 'CatalogAdapter.php';

class ScreencastCatalogAdapter implements CatalogAdapter
{
    private Screencast $screencast;

    public function __construct(Screencast $screencast)
    {
        $this->screencast = $screencast;
    }
    /**
     * @override
     */
    public function getTitleProduct()
    {
        return "{$this->screencast->getTitle()} by {$this->screencast->getauthor()}";
    }
}
