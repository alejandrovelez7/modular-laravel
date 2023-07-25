<?php

namespace App\Domains\Support\Services;

use App\Domains\Support\Contracts\DataTransferObjects\Customer;
use App\Domains\Support\Contracts\DataTransferObjects\Ticket;
use App\Domains\Support\Contracts\SupportService as Contract;
use DateTime;

class SupportService implements Contract
{
    public function getCustomer(int $customerId): Customer
    {
        return Customer::from([
            'id' => 1,
            'name' => 'Cool customer',
        ]);
    }

    public function createTicket(Customer $customer, Ticket $ticket): Customer
    {
        return Customer::from([
            'id' => 1,
            'name' => 'Cool customer',
            'tickets' => [
                Ticket::from([
                    'id' => 1,
                    'customerId' => 1,
                    'description' => 'Computer on fire',
                ]),
            ],
        ]);
    }

    public function resolveTicket(Ticket $ticket): Ticket
    {
        $ticket->resolvedAt = new DateTime();

        return $ticket;
    }
}
