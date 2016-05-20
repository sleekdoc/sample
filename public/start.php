<?php

use Daison\Tests\Classes;
use Daison\SleekDoc;

$root = dirname(__DIR__);

require $root.'/vendor/autoload.php';

$generator = new SleekDoc\Generator([
    SleekDoc\Components\JSONSample::class => [
        'getAction',
        'createAction',
        'cancelAction',
    ],
    SleekDoc\Components\XMLSample::class => [
        'indexAction',
    ],
]);

$generator->addData('title',            'Sample API');
$generator->addData('default_base_uri', [
    'json' => 'http://internal-api.app',
    'xml'  => 'http://external-api.app',
]);
