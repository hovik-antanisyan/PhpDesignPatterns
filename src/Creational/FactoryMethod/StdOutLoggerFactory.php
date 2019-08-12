<?php


namespace App\Creational\FactoryMethod;


class StdOutLoggerFactory implements LoggerFactory
{
    function createLogger(): Logger
    {
        return new StdOutLogger();
    }
}
