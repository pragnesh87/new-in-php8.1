<?php

namespace App\IntersectionTypes;

use App\Contracts\Designable;

class FrontEnd implements Designable
{

	public function design()
	{
		echo "I can design frontend";
	}

	public function cando()
	{
		echo "I can design frontend \n";
	}
}