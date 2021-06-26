<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
// pada singleton, kita hanya membatasi satu objek saja yang dibuat untuk digunakan bersamaan. Namun pada database, kita terkadang butuh lebih dari 1, tetapi tetap dalam jumlah yang dikendalikan. Maka, bisa kita buat dengan object pool, membuat objek lebih dari 1, tetapi dalam jumlah yang ditentukan, dan dibuat sekaligus.

class SingletonApp
{
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
