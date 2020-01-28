<?php

require_once 'Users.php';
require_once 'Admin.php';
require_once 'Test.php';
require_once 'Writer.php';

$admin = new Admin('admin', 'pass', ['ROLE' => 'SUPER_ADMIN', 'TYPE' => 'base']);
$user = new Users('alex', 'alexpass');
$test = new Test();

echo '<br> Login: ' . $admin->getLogin();

if ($admin instanceof Users) {
    echo '<br> Object $admin is class Users<br>';
}

if ($admin instanceof Admin) {
    echo '<br> Object $admin is class Admin<br>';
}

if ($admin instanceof Test) {
    echo '<br> Object $admin is class Test <br>';
}

$writer = new Writer();
$writer->writeLoginUser($admin);

var_dump($user->authorize());
var_dump($admin->authorize());

$arrUser =
[
    $admin,
    $user,
    $test
];

foreach ($arrUser as $object) {
    if ($object instanceof Users) {
        echo get_class($object)  . '::authorize = ' . $object->authorize() . '<br>';
    }
}