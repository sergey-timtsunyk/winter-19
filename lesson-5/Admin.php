<?php

final class Admin extends Users
{
    protected $rights;

    public function __construct($login, $password, $rights)
    {
        parent::__construct($login, $password);
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
}
