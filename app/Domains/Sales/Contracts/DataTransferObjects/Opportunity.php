<?php

namespace App\Domains\Sales\Contracts\DataTransferObjects;

use Spatie\LaravelData\Data;

class Opportunity extends Data
{
    public int $id;

    public string $companyName;

    public int $amount;
}
