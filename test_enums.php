<?php
ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

use App\Enums\PostStatus;
use App\Enums\OrderStatus;
use App\Enums\InvoiceStatus;

function acceptStatus(PostStatus $status)
{
	echo "Status : " . $status->text() . PHP_EOL;
}
acceptStatus(PostStatus::Draft);
acceptStatus(PostStatus::Published);
acceptStatus(PostStatus::Archived);

echo PHP_EOL;

## invoice
echo InvoiceStatus::Paid->value;

echo PHP_EOL;
var_dump(
	InvoiceStatus::tryFrom(InvoiceStatus::Paid->value)->text(),
	InvoiceStatus::tryFrom(InvoiceStatus::Paid->value)->color()
);
echo PHP_EOL;

## orderstatus

foreach (OrderStatus::cases() as $status) {
	var_dump(
		$status->value,
		$status->name,
	);
}
echo PHP_EOL;