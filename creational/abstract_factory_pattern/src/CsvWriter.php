<?php

namespace App;

interface CsvWriter
{
    public function write(array $line): string;
}
