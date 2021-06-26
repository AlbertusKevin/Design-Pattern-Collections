<?php

class Orders
{
    public function save()
    {
        $con = DatabasePool::getConnection();
        mysqli_query($con, 'INSERT INTO orders .....');
        DatabasePool::close($con);
    }
}
