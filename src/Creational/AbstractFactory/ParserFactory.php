<?php


namespace App\Creational\AbstractFactory;


class ParserFactory
{
    public function createCsvParser($skipHeaderLines)
    {
        return new CsvParser($skipHeaderLines);
    }

    public function createJsonParser()
    {
        return new JsonParser();
    }
}
