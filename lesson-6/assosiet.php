<?php

class User
{
    public function auth()
    {
        return 'pass';
    }
}

class Authentication
{
    private $user;

    public function setUser($user): void
    {
        $this->user = $user;
    }

    public function isAtorization(): bool
    {
        return strlen($this->user->auth()) > 5;
    }
}

$a = new Authentication();



$user = new User();

$a->setUser($user);
$a->isAtorization();
