<?php
interface AuthorizationUser
{
    public function authorize(): string;
}

$token  = 'pass:user@user.com';
$authorizationToken = new class($token) implements AuthorizationUser
{
    protected $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function authorize(): string
    {
        $data['login'] = $this->token;

        return json_encode($data);
    }
};

echo $authorizationToken->authorize();

var_dump($authorizationToken);


class Authorization
{
    /**
     * @var AuthorizationUser
     */
    private $authorizationUser;
    public function setAuthorizationUser(AuthorizationUser $authorizationUser)
    {
        $this->authorizationUser = $authorizationUser;
    }

    public function getHash()
    {
        return hash('sha256', $this->authorizationUser->authorize());
    }
}

$authorization = new Authorization();
$authorization->setAuthorizationUser(new class($token) implements AuthorizationUser
{
    protected $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function authorize(): string
    {
        $data['login'] = $this->token;

        return json_encode($data);
    }
});

echo $authorization->getHash();