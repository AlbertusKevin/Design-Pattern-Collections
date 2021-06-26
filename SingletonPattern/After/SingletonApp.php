<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php

require_once "Orders.php";
require_once "OrdersDetail.php";

class SingletonApp
{
    public function main()
    {
        // Dengan singleton, kita membuat koneksi ke database di kelas khusus yang disebut helper,
        // sehingga ketika kelas lain butuh koneksi ke database, kita menggunakan objek yang dibuat
        // di class helper tersebut, sehingga hanya 1 objek dan 1 baris kode yang mengacu pada open
        // connection yang sama.
        $order = new Orders();
        $order->save("data");

        $orderDetail = new OrdersDetail();
        $orderDetail->save("data1");
        $orderDetail->save("data2");
        $orderDetail->save("data3");
    }
}
