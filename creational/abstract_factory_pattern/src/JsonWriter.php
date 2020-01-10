<?php

namespace App;

interface JsonWriter
{
    public function write(array $data, bool $formatted): string;
}
