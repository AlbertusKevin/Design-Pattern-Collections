<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php

require_once "Orders.php";
require_once "OrdersDetail.php";

class SingletonApp
{
    public function main()
    {
        // sebelum menggunakan singleton, setiap kali kita ingin insert ke database, 
        // kita memanggil objek yang bersangkuatn dan objek tersebut membuka koneksi ke database.
        // Artinya, pada class ini, kita membuat 4 objek koneksi yang berbeda.
        // Untuk kasus ini, dampaknya menjadi boros resource ketika membuat 4 objek koneksi.
        $order = new Orders();
        $order->save("data");

        $orderDetail = new OrdersDetail();
        $orderDetail->save("data1");
        $orderDetail->save("data2");
        $orderDetail->save("data3");
    }
}
