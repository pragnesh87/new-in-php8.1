<?php

use App\Initializers\Employee;
use App\Initializers\EmployeeData;

ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

$emp1 = new Employee('Peter');

$empdata = new EmployeeData(200.25);
$emp2 = new Employee("Pragnesh", $empdata);

var_dump($emp1, $emp2);