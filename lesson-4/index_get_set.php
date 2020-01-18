<?php

class Settings
{
    private $propertys = [];
    private static $settings = [];

    public static function getSettings()
    {
        return self::$settings;
    }

    public function __set($name, $value)
    {
        self::$settings;
        $this->propertys[$name] = $value;
    }

    public function __get($name)
    {
        return $this->propertys[$name] ?? null;
    }

    public function __call($name, $arguments)
    {
        switch ($name) {
            case 'setName':
                $this->propertys['name'] = $arguments[0];
                break;
            case 'setType':
                $this->propertys['type'] = $arguments[0];
                break;
            case 'getName':
                return $this->propertys['name'] ?? null;
            case 'getType':
                 return $this->propertys['type'] ?? null;
            default: $this->propertys[$name] = $arguments;
        }
    }

    public static function __callStatic($name, $arguments)
    {
        self::$settings[$name] = $arguments;
    }
}

Settings::getSettings();

Settings::run('start', 100);

var_dump(Settings::getSettings());

$setting = new Settings();

$setting->count = 24;
echo $setting->count . PHP_EOL;

$setting->color = 'red';
echo $setting->color . PHP_EOL;

echo $setting->colors . PHP_EOL;

foreach (['arg1' => 10, 'pass' => false] as $item => $val) {
    $setting->$item = $val;
}


$setting->setType('type1');
$setting->setTypes('type1', 'type2');

var_dump($setting);



