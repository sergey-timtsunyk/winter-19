<?php

class User
{
    private $name;
    private $message;
    private $show;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->message = 'Привет ' . $name . '!';
    }

    public function show()
    {
        return $this->message;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

$user = new User('Alex');
$userCopy = $user;
$userCopy->setName('Mark');
$userClone = clone $user;
$userClone->setName('Piter');

var_dump($user);
var_dump($userCopy);
var_dump($userClone);




