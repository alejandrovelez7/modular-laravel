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

    test('internal boundaries')
        ->expect('App\Domains\Support\Contracts')
        ->toUseNothing()
        ->ignoring('Spatie\LaravelData\Data')
        ->ignoring('Spatie\LaravelData\Attributes\DataCollectionOf');
});
