<?php

class A
{
    public static $count;

    public function __construct()
    {
        self::$count++;
        echo 'Привет!';
    }

    public function __destruct()
    {
        self::$count--;
        echo 'Пока!';
    }
}

$objectA = new A();
unset($objectA);

