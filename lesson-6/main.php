<?php

class Main
{
    public $publicProp = 'public';
    protected $protectedProp = 'Protected';
    private $privateProp = 'private';

    public function nestedClass()
    {
        return new class($this->privateProp) extends Main
        {
            public $nestedProp = 'Nested';
            public $newProp;
            public function __construct($property) {
                $this->newProp = $property;
            }
            public function returnProtected() {
                return $this->protectedProp;
            }
        };
    }
}


$object = (new main())->nestedClass();

echo $object->nestedProp . '<br>';
echo $object->publicProp . '<br>';
echo $object->returnProtected() . '<br>';
echo $object->newProp . '<br>';

$object->nestedClass()->nestedClass();
