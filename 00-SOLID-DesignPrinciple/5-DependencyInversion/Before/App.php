<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// contoh kasus, kita membuat sebuah aplikasi toko yang dapat melakukan metode pembayaran lain selain tunai, seperti paypal atau gopay. Artinya, aplikasi toko kita akan terdapat baris kode yang memanggil api dari pihak paypal atau gopay tersebut, sehingga aplikasi toko kita sangat bergantung (coupled) terhadap api tersebut. Hal ini bisa mempersulit ketika kita mau test kode miliki kita karena saat test, kita pastinya tidak ingin memanggil API, atau ketika kita mau pindah dari paypal ke gopay, maka setiap kode yang memanggil api harus diubah mengikuti ketentuan api dari pihak gopay. Akan sangat banyak kode yang harus diubah dan tersebar di berbagai file

// Untuk menangani hal tersebut, biasanya kita buat sebuah class baru sebagai abstraksi yang menengahi antara api pihak ke tiga dengan aplikasi kita, sehingga aplikasi kita memanggil ke class abstraksi tersebut sehingga jika terjadi update pada paypal atau ingin mengganti dari paypal ke gopay, kita tidak perlu mengubah kode pada low level implementation (aplikasi kita) , cukup mengubah di class abstraksi tersebut. Mirip dengan mengimplementasikan design pattern facade atau adapter.

// 2 class Store hanya sebagai perbandingan, apa yang terjadi jika kita ubah dari stripe ke paypal. Aslinya hanya satu class store saja.

// ini adalah class store, aplikasi kita yang saat ini menggunakan layanan dari stripe
class StoreStripe
{
    var $stripe;

    public function __construct($user)
    {
        // aplikasi kita kontak langsung dengan api milik stripe
        $this->stripe = new Stripe($user);
    }

    public function purchaseBike($quantity)
    {
        $this->stripe->makePayment(200 * $quantity * 100);
    }

    public function purchaseHelmet($quantity)
    {
        $this->stripe->makePayment(15 * $quantity * 100);
    }
}

// misalkan kita ganti menggunakan layanan dari Pay pal, sehingga kita harus melakukan penyesuaian dengan class store kita.
class StorePaypal
{
    var $user;
    var $paypal;

    public function __construct($user)
    {
        $this->paypal = new Paypal();
        $this->user = $user;
    }

    public function purchaseBike($quantity)
    {
        $this->paypal->processPayment($this->user, 200 * $quantity);
    }

    public function purchaseHelmet($quantity)
    {
        $this->paypal->processPayment($this->user, 15 * $quantity);
    }
}

class Stripe
{
    var $user;

    function __construct($user)
    {
        $this->user = $user;
    }
    // menerima pembayaran dalam cents, kita kirim dalam pennies (x100), sehingga bagi 100
    function makePayment($amountInCents)
    {
        $amount = $amountInCents / 100;
        echo "{$this->user} made payment of $$amount with stripe" . PHP_EOL;
    }
}

class Paypal
{
    // Paypal memiliki ketentuan penggunaan api yang berbeda, seperti menerima param yang berbeda dari stripe.
    function processPayment($user, $amountInDollars)
    {
        echo "{$user} made payment of $$amountInDollars with paypal" . PHP_EOL;
    }
}

$store = new StorePaypal('john');
$store->purchaseBike(2);
$store->purchaseHelmet(2);
