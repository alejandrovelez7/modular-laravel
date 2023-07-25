<?php


describe('App\Domains\Support', function () {
    test('boundaries')
        ->expect('App\Domains\Support\Services')
        ->toUse('App\Domains\Support\Contracts')
        ->not
        ->toUse('App\Domains\Sales\Services');
});

