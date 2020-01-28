<?php

class Writer
{
    public function writeLogin($user)
    {
        echo "Login: {$user->getLogin()}<br/>";
    }

    public function writeLoginUser(Users $user)
    {
        echo "Login: {$user->getLogin()} and pass: {$user->getPassword()}<br/>";
    }
}