<?php

require_once 'autoload.php';
require_once 'vendor/autoload.php';

use DB\Model\{User, Admin};
use Manager\User as ManagerUser;

 $userManager = new ManagerUser();
 $user = new User();
 $admin = new Admin();

 \printf('');

