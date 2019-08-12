<?php


namespace App\Creational\AbstractFactory;


interface Parser
{
    public function parse(string $input): array;
}
