<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// Jika S adalah subtype dari T, maka objek T mampu digantikan oleh objek S dan objek turunan dari S tanpa harus memodifikasi attr atau method. Diharapkan, ketika memanggil method dari class extendsnya, dapat berfungsi dan melakukan hal yang sama.

// Pada contoh kasus ini, class Bird memiliki fungsi fly(), dengan asumsi semua class Bird akan bisa terbang. Namun terdapat permasalahan ketika class penguin extends dari class bird(), penguin tidak bisa terbang, sehingga ketika kita jalankan method fly() pada penguin, hasil yang didapat tidak sama dengan yang ada pada parent classnya.

class Bird
{
    public function fly()
    {
        echo "I can fly" . PHP_EOL;
    }
}

class Duck extends Bird
{
    public function quack()
    {
        echo "I can quack" . PHP_EOL;
    }
}

class Penguin extends Bird
{
    public function fly()
    {
        echo "Cannot fly" . PHP_EOL;
    }

    public function swim()
    {
        echo "I can swim" . PHP_EOL;
    }
}

function makeBirdFly(Bird $bird)
{
    $bird->fly();
}

$duck = new Duck();
$penguin = new Penguin();

makeBirdFly($duck);
makeBirdFly($penguin);
