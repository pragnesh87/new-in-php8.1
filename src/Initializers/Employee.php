<?php

namespace App\Initializers;

class Employee
{
	public function __construct(
		public string $name,
		public ?EmployeeData $data = new EmployeeData()
	) {
	}
}