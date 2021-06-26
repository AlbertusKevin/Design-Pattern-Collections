<?php
class AnimalFactory
{
    static function createObjectAnimal($type)
    {
        switch ($type) {
            case 'tiger':
                // return new Tiger();
                return new Tiger2(); // dengan factory, kita cukup ubah tipe classnya di class factory
            case 'dog':
                return new Dog();
        }

        return new Cat();
    }
}
