<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// Dengan null object pattern, kita tidak perlu melakukan pengecekan, karena kita meng-copy method dan properti dari object yang sesungguhnya dan kita beri nilai dan behaivour default sehingga program tidak akan error dan tidak perlu melakukan pengecekan.
require_once 'User.php';
require_once 'NullUser.php';

// 1. Kita buat class NullUser dengan nilai default untuk menangani data dan method default
// 2. Ubah fungsi getUser, jika tidak ditemukan, return NullUser, bukan null.

function getUser($id, $users)
{
    foreach ($users as $user) {
        if ($id == $user->getId()) {
            return $user;
        }
    }

    return new NullUser();
}

function printUser($id, $users)
{
    $user = getUser($id, $users);
    $name = $user->getName();

    echo "Hello $name" . PHP_EOL;

    // cek apakah user ada dan memiliki akses
    if ($user->hasAccess()) {
        echo "You Have Access." . PHP_EOL;
    } else {
        echo "You are forbidden." . PHP_EOL;
    }
}

$users = [
    new User(1, 'Bob'),
    new User(2, 'John')
];

printUser(1, $users);
echo PHP_EOL;
printUser(2, $users);
echo PHP_EOL;
printUser(3, $users);
