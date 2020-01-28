<?php

class Users
{
    protected $login;
    protected $password;
    private $isActive;
    private $dateTimeActive;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPassword(): string
    {
        return hash('md5', $this->password);
    }

    public function authorize()
    {
        $data['login'] = $this->getLogin();

        return json_encode($data);
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    final public function setIsActive(bool $isActive): void
    {
        if ($isActive) {
            $this->dateTimeActive = new DateTime();
        } else {
            unset($this->dateTimeActive);
        }

        $this->isActive = $isActive;
    }

    public function hasActive(): bool
    {
        return $this->isActive;
    }
}