<?php

class Employee
{
    private $name;
    private $role;
    private $salary;

    public function __construct($name, $role, $salary)
    {
        $this->name = $name;
        $this->role = $role;
        $this->salary = $salary;
    }
}
