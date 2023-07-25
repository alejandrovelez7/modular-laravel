<?php

declare(strict_types=1);

namespace App\Domains\Sales\Contracts;

use App\Domains\Sales\Contracts\DataTransferObjects\Customer;
use App\Domains\Sales\Contracts\DataTransferObjects\Opportunity;

interface SalesService
{
    public function createOpportunity(): Opportunity;

    public function getOpportunity(int $opportunityId): Opportunity;

    public function getCustomer(int $customerId): Customer;
}
