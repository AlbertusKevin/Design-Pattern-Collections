<?php
class Customer
{
    private $name;
    private $email;
    private $phone;
    private $address;

    public function __construct($email, $name, $phone, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

    //setter dan getter ...
}
