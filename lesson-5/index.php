<?php

class User {
    private $name;
    private $bOfD;
    private $isActive;
    private $lastActiveDate;

    /**
     * User constructor.
     * @param $name
     * @param $bOfD
     */
    public function __construct($name, $bOfD)
    {
        $this->name = $name;
        $this->bOfD = $bOfD;
        $this->isActive = true;
        $this->lastActiveDate = new \DateTime();
    }

    public function __sleep()
    {
        return [
            'name',
            'bOfD'
        ];
    }

    public function __wakeup()
    {
        $this->isActive = true;
        $this->lastActiveDate = new \DateTime();
    }

    public function __toString()
    {
       return 'User: '. $this->name . ' ' . $this->bOfD;
    }

    public function __invoke()
    {
        return 'User: ' . $this->name . ' active: ' . $this->lastActiveDate->format('d/m/Y') . ' method: ' . __METHOD__;
    }

    public function getClassName(): string
    {
        return __CLASS__;
    }
}

$user = new User('Petrov', '19/08/1990');

$serUser = serialize($user);
var_dump($serUser);

$user = unserialize($serUser, ['allowed_classes' => [User::class]]);
var_dump($user);

echo $user;

echo $user();

if ($user->getClassName() == User::class) {
    echo '<br>Object is class User';
}

var_dump(class_exists('User'));
var_dump(class_exists('A'));
var_dump(get_class($user));
var_dump(User::class);

