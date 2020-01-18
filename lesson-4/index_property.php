<?php

class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    public $age;

    /**
     * User constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function show()
    {
        return $this->name . ' - родился ' . (2020 - $this->age) . ' году';
    }


}

$user = new User('Alex', 36);

echo $user->show();
echo PHP_EOL;

$user->age = 'привет!';

echo $user->show();
