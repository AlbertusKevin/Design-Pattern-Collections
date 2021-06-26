<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// Kita memecah interface / abstract class Entity sehingga sekarang menjadi lebih kecil, dan setiap fungsi didalamnya ditangani oleh treat, sehingga ketika class lain subclass dari class Entity, mereka pasti memiliki attribute nama dan ketika butuh fungsi tertentu, tinggal use trait.

abstract class Entity
{
    var $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

trait Mover
{
    function move()
    {
        echo "{$this->name} moved";
    }
}

trait Attacker
{
    function attack($targetEntity)
    {
        echo "{$this->name} attacked {$targetEntity->name} for {$this->attackDamage}";

        $targetEntity->takeDamage($this->attackDamage);
    }
}

trait HasHealth
{
    function takeDamage($amount)
    {
        $this->health -= $amount;
        echo "{$this->name} has {$this->health} health remaining";
    }
}

class Character extends Entity
{
    use HasHealth, Attacker, Mover;

    var $attackDamage;
    var $health;

    function __construct($name, $attackDamage, $health)
    {
        parent::__construct($name);
        $this->attackDamage = $attackDamage;
        $this->health = $health;
    }
}

class Turret extends Entity
{
    use HasHealth, Attacker;

    var $attackDamage;
    var $health;

    function __construct($name, $attackDamage, $health)
    {
        parent::__construct($name);
        $this->attackDamage = $attackDamage;
        $this->health = $health;
    }
}

class Wall extends Entity
{
    use HasHealth;
    var $health;

    function __construct($name, $attackDamage, $health)
    {
        parent::__construct($name);
        $this->attackDamage = $attackDamage;
        $this->health = $health;
    }
}
