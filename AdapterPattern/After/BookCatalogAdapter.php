<?php
require_once 'CatalogAdapter.php';

class BookCatalogAdapter implements CatalogAdapter
{
    private Book $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }
    /**
     * @override
     */
    public function getTitleProduct()
    {
        return "{$this->book->getTitle()} by {$this->book->getauthor()}";
    }
}
