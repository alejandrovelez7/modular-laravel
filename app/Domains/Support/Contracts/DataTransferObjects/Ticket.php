<?php

namespace App\Domains\Support\Contracts\DataTransferObjects;

use DateTime;
use Spatie\LaravelData\Data;

class Ticket extends Data
{
    public int $id;

    public int $customerId;

    public string $description;

    public ?DateTime $resolvedAt;
}
