<?php
require_once 'PDOConnect.php';
require_once 'User.php';

$pdo = PDOConnect::getPDO();

$id = $_GET['id'];

var_dump("DELETE FROM users WHERE id = $id");
//$res = $pdo->exec("DELETE FROM users WHERE id = $id");

$stm = $pdo->prepare('DELETE FROM users WHERE id = :id');
$res = $stm->execute(['id' => $id]);

var_dump($res);
