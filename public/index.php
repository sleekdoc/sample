<?php

require __DIR__.'/start.php';

$blade = $generator->make(
            $root.'/resources/views',
            $root.'/storage/cache'
         );

// echo '<pre>';var_dump($generator->getData());exit;

echo $blade->render();
