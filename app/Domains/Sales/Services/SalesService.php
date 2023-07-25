<?php

namespace App\Domains\Sales\Services;

use App\Domains\Sales\Contracts\DataTransferObjects\Opportunity;
use App\Domains\Sales\Contracts\SalesService as Contract;

class SalesService implements Contract
{
    public function createOpportunity(): Opportunity
    {
        // TODO: Implement createOpportunity() method.
        return Opportunity::from([
            'id' => 1,
            'name' => 'Cool Company',
            'amount' => 10000000,
        ]);
    }

    public function getOpportunity(int $opportunityId): Opportunity
    {
        // TODO: Implement getOpportunity() method.
        return Opportunity::from([
            'id' => 1,
            'name' => 'Cool Company',
            'amount' => 10000000,
        ]);
    }
}
