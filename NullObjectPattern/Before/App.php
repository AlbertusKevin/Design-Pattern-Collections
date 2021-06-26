<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// Digunakan jika terdapat kasus dimana kita akan menggunakan sebuah objek yang sewaktu-waktu objek tersebut sedang tidak exist, seperti contoh user ketika login, sehingga kita perlu melakukan pengecekan manual apakah User sudah login (object exist) atau tidak (object null) sebelum mengakses properti atau method dari object tersebut.
require_once 'User.php';

// 1. cek apakah user ada? simulasi jika login atau register
function getUser($id, $users)
{
    foreach ($users as $user) {
        if ($id == $user->getId()) {
            return $user;
        }
    }

    return null;
}

function printUser($id, $users)
{
    $user = getUser($id, $users);

    // jika user tidak ada, akan default nama yang ditampilkan, yaitu guest
    $name = 'Guest';
    if ($user != null) {
        $name = $user->getName();
    }

    echo "Hello $name" . PHP_EOL;

    // cek apakah user ada dan memiliki akses
    if ($user != null && null && $user->hasAccess()) {
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
