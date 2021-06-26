<?php

class OrdersDetail
{
    public function save()
    {
        $con = DatabasePool::getConnection();
        mysqli_query($con, 'INSERT INTO OrdersDetail .....');
        DatabasePool::close($con);
    }
}
