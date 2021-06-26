<?php
class NullUser
{
    private $id = -1;
    private $name = 'Guest';

    public function hasAccess()
    {
        return false;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getId()
    {
        return $this->id;
    }
}
