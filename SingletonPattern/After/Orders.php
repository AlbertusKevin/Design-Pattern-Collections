<?php

class Orders
{
    public function save()
    {
        $con = Connection::openConnection();
        mysqli_query($con, 'INSERT INTO orders .....');
    }
}
