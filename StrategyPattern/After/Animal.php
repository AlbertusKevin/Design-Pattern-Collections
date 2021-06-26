<?php
// kita hilangkan method fly agar semua subclass tidak seakan-akan dipaksa memiliki function tersebut

// kita tambahkan instance attribute yang bertipe interface Flys yang nantinya akan diisi oleh subclass dari interface Flys, sehingga kita mewariskan function flying tidak dengan cara inheritance biasa, tapi dengan cara composition, dimana kita memasukkan behaviour yang kita enkapsulasi sebagai class sebagai attribute bertipe objek (menjadi komposisi) pada class Animal.
require_once 'Flys.php';

class Animal
{
    private string $name;
    private float $height;
    private int $weight;
    private string $favFood;
    private float $speed;
    private string $sound;

    public Flys $flytingType;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        if ($weight > 0) {
            $this->weight = $weight;
        } else {
            echo "Weight must be bigger than 0";
        }

        return $this;
    }

    public function getFavFood()
    {
        return $this->favFood;
    }

    public function setFavFood($favFood)
    {
        $this->favFood = $favFood;

        return $this;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    public function getSound()
    {
        return $this->sound;
    }

    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

    // buat getter dan setter untuk fly attr
    public function tryToFly(): string
    {
        return $this->flytingType->fly();
    }

    public function setFlyingAbility(Flys $newType): void
    {
        $this->flytingType = $newType;
    }
}
