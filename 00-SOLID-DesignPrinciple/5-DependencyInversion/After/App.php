<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// aplikasi kita
class Store
{
    var $paymentProcessor;

    public function __construct($paymentProcessor)
    {
        $this->paymentProcessor = $paymentProcessor;
    }

    public function purchaseBike($quantity)
    {
        // amount in dollars
        $this->paymentProcessor->makePayment(200 * $quantity);
    }

    // amount in dollars
    public function purchaseHelmet($quantity)
    {
        $this->paymentProcessor->makePayment(15 * $quantity);
    }
}

// api pihak ketiga
class Stripe
{
    var $user;

    function __construct($user)
    {
        $this->user = $user;
    }

    // menerima pembayaran dalam cents
    function makePayment($amountInCents)
    {
        $amount = $amountInCents / 100;
        echo "{$this->user} made payment of $$amount with stripe" . PHP_EOL;
    }
}

class Paypal
{
    function processPayment($user, $amountInDollars)
    {
        echo "{$user} made payment of $$amountInDollars with paypal" . PHP_EOL;
    }
}

// abstraksi class, untuk menengahi antara aplikasi kita dengan api pihak ketiga. Untuk API stripe.
class StripePaymentProcessor
{
    var $user;
    var $stripe;

    public function __construct($user)
    {
        $this->user = $user;
        $this->stripe = new Stripe($user);
    }

    function makePayment($amountInDollars)
    {
        $this->stripe->makePayment($amountInDollars * 100);
    }
}

// misal ingin kita ganti dari stripe ke paypal, maka penyesuain kode dilakukan di class ini saja, tanpa perlu mengubah class store, atau di aplikasi utama kita
class PaypalPaymentProcessor
{
    var $user;
    var $paypal;

    public function __construct($user)
    {
        $this->user = $user;
        $this->paypal = new Paypal();
    }

    function makePayment($amountInDollars)
    {
        $this->paypal->processPayment($this->user, $amountInDollars);
    }
}

// kita hanya perlu mengganti baris ini saja jika ingin berganti dari stripe ke paypal
// $store = new Store(new StripePaymentProcessor('john'));
$store = new Store(new PaypalPaymentProcessor('john'));
$store->purchaseBike(2);
$store->purchaseHelmet(2);
