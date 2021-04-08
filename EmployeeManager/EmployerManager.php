<?php

namespace Manager;
class EmployerManager
{
    private static $employee = [];

    public static function getEmployee()
    {
        return self::$employee;
    }

    public static function add($employee)
    {
        self::$employee[] = $employee;
    }

    public static function del($index)
    {
        array_splice(self::$employee, $index, 1);
    }

    public static function update($employee, $index)
    {
        self::$employee[$index]=$employee;
    }
}