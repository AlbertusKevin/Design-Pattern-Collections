<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// pisahkan fungsi-fungsi atau properti dalam sebuah interface yang saling berbeda menjadi bagian-bagian kecil. Interface segregation memastikan apapun class yang mengimplement interface, dapat menggunakan semua function di dalamnya dengan benar dan semestinya

// pada kasus ini, class Character masuk akan memiliki semua fungsi yang ada pada class entity, namun class Turret serasa aneh jika memiliki fungsi move(), yang artinya class Turret yang implement interface Entity tidak bisa menggunakan semua function yang ada pada interface Entity.

interface Entity
{
    function move();
    function attack();
    function takeDamage($amount);
}

class Character implements Entity
{
    function move()
    {
    }

    function attack()
    {
    }

    function takeDamage($amount)
    {
    }
}

class Turret implements Entity
{
    function move()
    {
    }

    function attack()
    {
    }

    function takeDamage($amount)
    {
    }
}
