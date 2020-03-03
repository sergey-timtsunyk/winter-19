<?php

class User
{
    private $name;
    private $email;
    private $role;

    public function __construct(string $role)
    {
        $this->name = 'Name';
        $this->email = 'Email';
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
}