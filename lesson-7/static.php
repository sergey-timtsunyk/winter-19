<?php
class ShowDate
{
    public static $mount;
    private static $year;

    public static function getYear(): string
    {
        return self::$year;
    }

    public static function setYear(string $year): void
    {
        self::$year = $year;
    }

    public function getMount(): string
    {
        return self::$mount;
    }
}

ShowDate::$mount = '01';
ShowDate::setYear('2020');
echo ShowDate::$mount . '-' . ShowDate::getYear() . '</br>';

$showDate = new ShowDate();
echo $showDate->getMount() . '</br>';

$showDate::$mount = '10';
echo ShowDate::$mount . '</br>';

