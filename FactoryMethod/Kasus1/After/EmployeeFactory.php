<?php
class EmployeeFactory
{
    public static function createManager($name): Employee
    {
        return new Employee($name, "manager", 20000000);
    }
    public static function createStaff($name): Employee
    {
        return new Employee($name, "staff", 10000000);
    }
}
