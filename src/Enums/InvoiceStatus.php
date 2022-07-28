<?php

namespace App\Enums;

enum InvoiceStatus: int
{
	case Pending = 0;
	case Paid = 1;
	case Void = 2;
	case Failed = 3;

	public function text(): string
	{
		return $this->name;
	}

	public function color()
	{
		return match ($this) {
			self::Pending => 'orange',
			self::Paid => 'green',
			self::Void => 'yellow',
			self::Failed => 'red',
		};
	}
}