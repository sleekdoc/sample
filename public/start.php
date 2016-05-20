<?php

use Daison\Tests\Classes;
use Daison\SleekDoc\Generator;

$root = dirname(__DIR__);

require $root.'/vendor/autoload.php';

$generator = new Generator([
    Classes\Sample1::class => [
        'getAction',
        'createAction',
        'cancelAction',
    ],
]);

$generator->addData('title',            'Sample API');
$generator->addData('default_base_uri', 'http://internal-api.app');
