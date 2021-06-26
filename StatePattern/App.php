<!-- Source: Derek Banas, youtube, Design Patterns Tutorial -->
<?php
// Memungkinkan untuk mengubah behaviour suatu objek ketika terjadi perubahan state. Terdapat 3 istilah:
// 1. Context (Account): mengatur instance of ConcreteState subclass yang mendefinisikan state saat ini
// 2. State: Interface yang mengenkapsulasi behaviour sesuai state dari context.
// 3. ConcreteState: tiap subclass mengimplements behaviour yang berhubungan dengan state context.

// Contoh kasus, ATM, memiliki beberapa state, HasCard, NoCard, HasPin, NoCash. Pada tahap awal, kita menentukan state apa saja yang mungkin ada dalam sebuah kasus.

// Setiap pengguna atm, akan memiliki behaviour sebaga berikut, Insert Card, Eject Card, Insert Pin, dan Request Cash.

// Maka, setiap state tersebut akan dibuat classnya masing-masing, dan didalamnya terdapat method-method dari behaviour user tersebut (implement ke interface yang sama sehingga bisa dilakukan polymorphism). Jika ada aksi yang mengubah state, maka kita akan set contex state pada object ATMMachine.
require_once 'ATMMachine.php';

$atmMachine = new ATMMachine();
// aksi akan mengubah state ATM dari semula has no card, menjadi has card
$atmMachine->insertCard();
// aksi akan mengubah state ATM menjadi no card
$atmMachine->ejectCard();
// aksi akan mengubah state ATM menjadi has card
$atmMachine->insertCard();
// aksi akan mengubah state ATM menjadi has correct pin
$atmMachine->insertPin(1234);
// aksi akan mengubah state ATM menjadi has no money, karena pnearikan menyebabkan cash menjadi kosong
$atmMachine->requestCash(2000);
// state tetap
$atmMachine->insertCard();
// state tetap
$atmMachine->insertPin(1234);
?>