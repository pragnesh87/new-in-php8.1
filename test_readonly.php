<?php
ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

use App\Readonly\User;

$user = new User(1, 'Joe');

$user->name = 'Json';
$user->uid = 2; //not allowed

var_dump($user);