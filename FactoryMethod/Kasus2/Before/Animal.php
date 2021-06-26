<?php

interface Animal
{
    function speak();
}
/**
 * @deprecated
 */
class Tiger implements Animal
{
    function speak()
    {
        echo "tiger roar";
    }
}

class Tiger2 implements Animal
{
    function speak()
    {
        echo "tiger roar roar";
    }
}

class Cat implements Animal
{
    function speak()
    {
        echo "cat miauw";
    }
}

class Dog implements Animal
{
    function speak()
    {
        echo "dog bark woof";
    }
}
