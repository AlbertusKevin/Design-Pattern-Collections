<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php

require_once "Orders.php";
require_once "OrdersDetail.php";

class App
{
    /*
        Pada singleton, kita memastikan objek database yang dibuat hanya 1. 
        Namun, jika traffic tinggi, kita membutuhkan lebih dari 1 objek koneksi ke database agar mengurangi antrian request,
        namun kita juga memastikan agar objek yang dibuat tidak memakan resource yang begitu besar. Maka, kita bisa gunakan object
        pool, contohnya adalah database pool. Ketika awal app dijalankan, buat 100 (contoh) koneksi dan masukkan ke dalam pool.
        ketika ada request, ambil objek yang telah diinstance dari pool tersebut, dan setelah digunakan, wajib dikembalikan lagi ke dalam pool.
        Dengan demikian, penggunaan resource dan jumlah object yang diinstance dapat terkontrol.
    */
    public function main()
    {
        $order = new Orders();
        $order->save("data");

        $orderDetail = new OrdersDetail();
        $orderDetail->save("data1");
        $orderDetail->save("data2");
        $orderDetail->save("data3");
    }
}
