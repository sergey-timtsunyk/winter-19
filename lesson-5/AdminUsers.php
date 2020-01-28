<?php

class AdminUsers
{
    protected $rights;
    private $user;
    private $test;

    public function __construct($login, $password, $rights)
    {
        $this->user = new Users($login, $password);
        $this->rights = $rights;

        $this->setIsActive(true);
    }

    public function getRights()
    {
        return $this->rights;
    }

    public function setRights($rights)
    {
        $this->rights = $rights;
    }

    public function getPassword(): string
    {
        return hash('sha256', $this->password);
    }

    public function authorize()
    {
        $data['login'] = $this->getLogin();
        $data['rights'] = $this->getRights();

        return json_encode($data);
    }

    public function getLogin(): string
    {
        return $this->user->getLogin();
    }
}