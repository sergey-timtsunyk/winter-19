<?php

abstract class AbstractUser
{
    protected $login;
    protected $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    abstract public function authorize(): string;

    public function generationHash(): string
    {
        return hash('sha256', $this->authorize());
    }
}

class User extends AbstractUser
{
    public function getLogin()
    {
        return $this->login;
    }
    public function authorize(): string
    {
        $data['login'] = $this->getLogin();

        return json_encode($data);
    }
}

class Admin extends AbstractUser
{
    private $type;

    public function __construct($login, $password, $type)
    {
        parent::__construct($login, $password);
        $this->type = $type;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function authorize(): string
    {
        $data['login'] = $this->getLogin();
        $data['type'] = $this->type;

        return json_encode($data);
    }
}
