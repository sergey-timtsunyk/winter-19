<?php
class Base
{
    protected $pr = 'property';
    public function print()
    {
        echo 'print: Base';
    }
}

trait TraitBase
{
    protected $pr = 'property';
    public function print()
    {
        echo 'print: TraitBase!';
    }

    public static function printStatic()
    {
        echo 'Static TraitBase!';
    }
}

trait Second
{
    public function printSecond()
    {
        echo 'Second!';
    }
}

class Main extends Base
{
    use TraitBase;
    use Second;
}

$m = new Main();

$m->print();
$m->printSecond();
Main::printStatic();

