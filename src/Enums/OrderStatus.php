<?php

namespace App\Enums;

enum OrderStatus: string
{
	case Draft = 'draft';
	case Pending = 'pending';
	case Paid = 'paid';
	case PaymentFailed = 'payment-failed';

	public function text(): string
	{
		return $this->name;
	}
}