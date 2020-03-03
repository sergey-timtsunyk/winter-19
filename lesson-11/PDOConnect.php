<?php

class PDOConnect
{
    public static function getPDO(): \PDO
    {
        $dsn = 'mysql:host=127.0.0.1;port=3313;dbname=app';
        $pdo = new \PDO($dsn, 'root', '123');
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        return $pdo;
    }
}