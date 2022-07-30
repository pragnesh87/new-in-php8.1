<?php

namespace App\Initializers;

class EmployeeData
{
	public function __construct(
		private float $salary = 0.00,
	) {
	}
}