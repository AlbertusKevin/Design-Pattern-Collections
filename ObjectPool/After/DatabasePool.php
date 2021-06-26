<?php
class DatabasePool
{
    private static $pool = [];

    // Pertama aplikasi dijalankan, membuat 100 koneksi ke database
    public static function __construct()
    {
        for ($i = 0; $i < 100; $i++) {
            $connection = mysqli_connect('localhost', 'root', '', 'table');
            DatabasePool::$pool[] = $connection;
        }
    }

    // ambil koneksi dari pool
    public static function getConnection()
    {
        // jika koneksi sudah terpakai semua, maka request harus menunggu
        if (empty(DatabasePool::$pool)) {
            return "Koneksi telah terpakai semua";
        }

        return array_pop(DataBasepool::$pool);
    }

    // mengembalikan koneksi ke pool setelah digunakan
    public static function close($connection)
    {
        DatabasePool::$pool[] = $connection;
    }
}
