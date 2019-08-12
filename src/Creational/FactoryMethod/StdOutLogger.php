<?php

namespace App\Creational\FactoryMethod;

class StdOutLogger implements Logger
{
    public function __construct()
    {
    }

    public function log(string $message)
    {
        echo $message;
    }
}
