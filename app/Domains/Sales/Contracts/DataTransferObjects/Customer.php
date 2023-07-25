<?php

namespace App\Domains\Sales\Contracts\DataTransferObjects;

use Spatie\LaravelData\Data;

class Customer extends Data
{
    public int $id;

    public string $name;
}
