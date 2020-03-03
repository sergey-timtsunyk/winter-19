<?php
require_once 'PDOConnect.php';
require_once 'User.php';

$pdo = PDOConnect::getPDO();


$name = $_GET['name'];
$email = $_GET['email'];
$date = (new \DateTime())->format(\DATE_ATOM);


//$res = $pdo->exec("INSERT INTO users (`name`, `email`, `date`) VALUES ('$name', '$email', '$date')");
$stm = $pdo->prepare(
    "INSERT INTO users (`name`, `email`, `date`) VALUES (:name, :email, :date)"
);
$stm->bindValue('name', $name, \PDO::PARAM_STR);
$stm->bindParam('email', $email, \PDO::PARAM_STR);
$stm->bindValue('date', $date, \PDO::PARAM_STR);

$email = $email . '_test';

$res = $stm->execute();

var_dump($res);

