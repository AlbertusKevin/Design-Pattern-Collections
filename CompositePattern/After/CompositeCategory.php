<?php
class CompositeCategory extends Category
{
    private $categories = [];

    public function __construct(string $name, array $categories)
    {
        parent::__construct($name);
        $this->categories = $categories;
    }

    public function getCategories()
    {
        return $this->categories;
    }
}
