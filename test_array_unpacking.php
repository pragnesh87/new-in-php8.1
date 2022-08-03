<?php

$numbers = [1, 2, 3, 4];
$newNumbers = [...$numbers, 5, 6, 7];

$defaultUser = [
	'name' => 'John',
	'surname' => 'Doe'
];

$user = [
	...$defaultUser,
	...['age' => 30],
	'name' => 'Zura'
];

echo '<pre>';
print_r($newNumbers);
print_r($user);
echo '</pre>';