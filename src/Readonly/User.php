<?php

namespace App\Readonly;

class User
{
	public function __construct(
		public readonly int $uid,
		public string $name,
	) {
	}
}