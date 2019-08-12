<?php

use App\Creational\AbstractFactory\ParserFactory;

require '../../../vendor/autoload.php';

$parserFactory = new ParserFactory();

echo '<pre>';
print_r($parserFactory->createJsonParser()->parse(json_encode(['foo' => 'bar'])));
print_r($parserFactory->createCsvParser(false)->parse(
    '5;6;7
8;9;10'
));
echo '</pre>';
