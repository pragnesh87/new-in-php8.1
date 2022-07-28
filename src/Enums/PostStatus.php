<?php

namespace App\Enums;

enum PostStatus
{
	case Draft;
	case Published;
	case Archived;

	public function text(): string
	{
		return $this->name;
	}
}