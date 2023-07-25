<?php

namespace App\Domains\Support\Contracts;

use App\Domains\Support\Contracts\DataTransferObjects\Customer;
use App\Domains\Support\Contracts\DataTransferObjects\Ticket;

interface SupportService
{
    public function getCustomer(int $customerId): Customer;

    public function createTicket(Customer $customer, Ticket $ticket): Customer;

    public function resolveTicket(Ticket $ticket): Ticket;
}
