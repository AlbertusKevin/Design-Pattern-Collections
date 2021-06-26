<?php
class Store
{
    private $name;
    private $city;
    private $country;
    private $category;

    public function __construct($name, $city, $country, $category)
    {
        $this->name = $name;
        $this->city = $city;
        $this->country = $country;
        $this->category = $category;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCity($dity)
    {
        $this->dity = $dity;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }


    public function clone(): Store
    {
        return clone $this;
    }
}
