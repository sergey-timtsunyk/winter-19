<?php

interface AuthorizationUser
{
    public function authorize(): string;
}

interface LoginUser
{
    public function setLogin(string $login): void;
    public function getLogin(): string;
    public function authorize(): string;
}

class User implements AuthorizationUser, LoginUser
{
    protected $login;

    public function authorize(): string
    {
        $data['login'] = $this->getLogin();

        return json_encode($data);
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getLogin(): string
    {
        return $this->login;
    }
}


class Authentication
{
    /**
     * @var AuthorizationUser
     */
    private $authorizationUser;

    public function setUser(AuthorizationUser $authorizationUser): void
    {
        $this->authorizationUser = $authorizationUser;
    }

    public function isAuthorize(): bool
    {
        return strlen($this->authorizationUser->authorize()) > 5;
    }
}