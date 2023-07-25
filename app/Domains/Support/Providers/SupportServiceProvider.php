<?php

namespace App\Domains\Sales\Providers;

use App\Domains\Support\Contracts\SupportService as SupportServiceContract;
use App\Domains\Support\Services\SupportService;
use Illuminate\Support\ServiceProvider;

class SupportServiceProvider extends ServiceProvider
{
    public array $bindings = [
        SupportServiceContract::class => SupportService::class,
    ];

    public function provides(): array
    {
        return [
            SupportServiceContract::class,
        ];
    }
}
