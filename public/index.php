<?php

require __DIR__.'/start.php';

$blade = $generator->make(
            $root.'/resources/views',
            $root.'/storage/cache'
         );

echo $blade->render();
