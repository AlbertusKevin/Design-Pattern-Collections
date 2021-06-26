<?php

class OrdersDetail
{
    public function save()
    {
        $con = Connection::openConnection();
        mysqli_query($con, 'INSERT INTO OrdersDetail .....');
    }
}
