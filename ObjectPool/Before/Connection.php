<?php

class Connection
{
    private static $connection;

    public static function openConnection()
    {
        if (empty($connection)) {
            Connection::$connection = mysqli_connect('localhost', 'root', '', 'table');
        }

        return Connection::$connection;
    }
}
