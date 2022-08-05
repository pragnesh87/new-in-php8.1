<?php

use App\Contracts\Codeable;
use App\Contracts\Designable;
use App\IntersectionTypes\BackEnd;
use App\IntersectionTypes\FrontEnd;
use App\IntersectionTypes\FullStack;
use App\IntersectionTypes\Tester;

ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

// union type
function canDesignOrCode(Codeable|Designable|Tester $dosomethig): void
{
	$dosomethig->cando();
}

// intersection type
function canDesignAndCode(Codeable&Designable $dosomethig): void
{
	$dosomethig->cando();
}

canDesignOrCode(new BackEnd());
canDesignOrCode(new FrontEnd());
canDesignOrCode(new FullStack());
canDesignOrCode(new Tester());

echo "\n------------\n";

canDesignAndCode(new FullStack());
//canDesignAndCode(new BackEnd()); // error
//canDesignAndCode(new FrontEnd()); // error