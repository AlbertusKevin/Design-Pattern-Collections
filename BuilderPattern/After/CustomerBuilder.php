<?php
// Isinya adalah atribute dari customer, method setter, 
// dan method build dengan tipe returnnya object customer.

class CustomerBuilder
{
    private $name = "";
    private $email = "";
    private $phone = "";
    private $address = "";

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function build(): Customer
    {
        return new Customer(
            $this->name,
            $this->email,
            $this->phone,
            $this->address,
        );
    }
}
