<?php
class A {
    public static function foo() {
        static::who();
    }
    public static function who() {
        echo __CLASS__."<br>";
    }
}
class B extends A {
    public static function test() {
        A::foo();
        parent::foo();
        self::foo();
    }
    public static function who() {
        echo __CLASS__."<br>";
    }
}
class C extends B {
    public static function who() {
        echo __CLASS__."<br>";
    }
}
C::test();
