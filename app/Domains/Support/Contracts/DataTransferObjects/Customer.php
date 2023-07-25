<?php

namespace App\Domains\Support\Contracts\DataTransferObjects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class Customer extends Data
{
    public int $id;

    public string $name;

    #[DataCollectionOf(Ticket::class)]
    public ?DataCollection $tickets;
}
