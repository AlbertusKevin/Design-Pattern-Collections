<?php

class OrdersDetail
{
    public function save()
    {
        $con = mysqli_connect('localhost', 'root', '', 'test');
        mysqli_query($con, 'INSERT INTO OrdersDetail .....');
    }
}
