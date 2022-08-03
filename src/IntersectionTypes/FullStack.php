<?php

namespace App\IntersectionTypes;

use App\Contracts\Codeable;
use App\Contracts\Designable;

class FullStack implements Codeable, Designable
{

	public function design()
	{
		echo "I can design frontend";
	}

	public function code()
	{
		echo "I can write code for backend";
	}

	public function cando()
	{
		echo "I can design and write code for backend \n";
	}
}