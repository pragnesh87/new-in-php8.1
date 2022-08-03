<?php

namespace App\IntersectionTypes;

use App\Contracts\Codeable;

class BackEnd implements Codeable
{
	public function code()
	{
		echo "I can write code for backend";
	}

	public function cando()
	{
		echo "I can write code for backend \n";
	}
}