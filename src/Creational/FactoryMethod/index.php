<?php


require '../../../vendor/autoload.php';

use App\Creational\FactoryMethod\FileLoggerFactory;
use App\Creational\FactoryMethod\StdOutLoggerFactory;

$fileLoggerFactory = new FileLoggerFactory();
$fileLoggerFactory->createLogger()->log('Hello world');

$stdOutLoggerFactory = new StdOutLoggerFactory();
$stdOutLoggerFactory->createLogger()->log('It\'s cool');
