<?php
class Animal
{
    private string $name;
    private float $height;
    private int $weight;
    private string $favFood;
    private float $speed;
    private string $sound;

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

    public function fly(): void
    {
        echo "Now i can fly";
    }
}
