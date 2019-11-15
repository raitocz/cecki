<?php declare(strict_types=1);

require_once('vendor/autoload.php');

$string = new \RaitoCZ\Cecki\Type\StringType('Hello Razu and Flea! It is really a nice to meet you.');
dump($string->improveReadability()); // Hallo Rizi ind Flai! At es raillo i neca to maat ooi.

dump($string->improveSlightly());
