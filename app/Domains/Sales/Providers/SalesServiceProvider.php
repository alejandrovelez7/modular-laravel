<?php

namespace App\Domains\Sales\Providers;

use App\Domains\Sales\Contracts\SalesService as SalesServiceContract;
use App\Domains\Sales\Services\SalesService;
use Illuminate\Support\ServiceProvider;

class SalesServiceProvider extends ServiceProvider
{
    public array $bindings = [
        SalesServiceContract::class => SalesService::class,
    ];

    public function provides(): array
    {
        return [
            SalesServiceContract::class,
        ];
    }
}
