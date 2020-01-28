<?php

class A {
    private $data = [];

    public function __construct()
    {
        $this->data = [
          'test',
          'false',
        ];
    }

    public function __isset($name)
    {
        if (count($this->data)) {
            echo "Data not empty";
        }
    }

    public function __unset($name)
    {
        $this->data = [];
    }
}

$a = new A();

isset($a->data);
unset($a->data);
isset($a->data);
var_dump($a);
