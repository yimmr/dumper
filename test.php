<?php

use Impack\Dumper\Dumper;

include __DIR__ . '/imdebug/load.php';

Dumper::log(123);
Dumper::log([1, 2, 3], 'dd');
Dumper::logHTML([new Dumper, 789]);
Dumper::logHTML(new Dumper);