<?php
trait A
{
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B
{
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

trait C
{
    public function smallTalk() {
        echo 'c';
    }
    public function bigTalk() {
        echo 'C';
    }
}

interface TalkerInterface
{
    public function smallTalk();
    public function bigTalk();
}

class Talker implements TalkerInterface
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

$t = new Talker();

$t->smallTalk();
$t->bigTalk();
$t->talk();