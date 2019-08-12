<?php


namespace App\Creational\FactoryMethod;


class FileLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new FileLogger('test.txt');
    }
}
