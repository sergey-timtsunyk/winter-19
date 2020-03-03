<?php
require_once 'PDOConnect.php';
require_once 'User.php';

$pdo = PDOConnect::getPDO();

$stmt = $pdo->query('SELECT * FROM users');
$stmt->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'User', ['ADMIN']);
//$arr = $stmt->fetchAll();


/** @var User $user */
while ($user = $stmt->fetch()) {
    echo $user->getName() .' : ' . $user->getEmail() . ' [' . $user->getRole() . ']<br>';
}

