<?php

describe('App\Domains\Support', function () {
    describe('external boundaries', function () {
        test('models')
            ->expect('App\Domains\Support\Models')
            ->toOnlyBeUsedIn('App\Domains\Support');

        test('services')
            ->expect('App\Domains\Support\Services')
            ->toOnlyBeUsedIn('App\Domains\Support');
    });

    describe('internal boundaries', function () {
        test('contracts is isolated')
            ->expect('App\Domains\Support\Contracts')
            ->toUseNothing()
            ->ignoring('Spatie\LaravelData\Data')
            ->ignoring('Spatie\LaravelData\Attributes\DataCollectionOf');

        test('only uses contracts of other domains')
            ->expect('App\Domains\Support')
            ->toOnlyUse('App\Domains\Support')
            ->ignoring('App\Domains\Sales\Contracts')
            ->ignoring('Spatie\LaravelData\Data')
            ->ignoring('Spatie\LaravelData\Attributes\DataCollectionOf')
            ->ignoring('Illuminate\Support\ServiceProvider')
            ->ignoring('Illuminate\Database\Eloquent\Model');
    });
});
