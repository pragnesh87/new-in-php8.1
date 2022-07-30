<?php

//$toupper = Closure::fromCallable('strtoupper');
$toupper = strtoupper(...);
echo $toupper('foo'); // FOO

function sum(int|float $num1, int|float $num2): int|float
{
	return $num1 + $num2;
}

$sumof = sum(...);

echo $sumof(5, 7);