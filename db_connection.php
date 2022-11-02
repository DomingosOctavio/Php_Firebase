<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory())->withDatabaseUri('https://apppainelsolar-496a7-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();