## Modular Laravel

A modular laravel approach using [Pest Architecture](https://pestphp.com/docs/arch-testing) tests to enforce domain boundaries.

## Overview

The directory structure of this project implements _just enough_ ™️ domain driven design via the `App\Domains` directory.

There are two Domains:
* Support
* Sales

Slightly inspired by the [Bounded Context](https://martinfowler.com/bliki/BoundedContext.html) article by Martin Fowler.

Domains can only communicate with other domains via the `Contracts` directory, which is inspired by this [repo and talk](https://github.com/avosalmon/modular-monolith-laravel)! 

## Enforcing Seams

Pest architecture tests live in https://github.com/alejandrovelez7/modular-laravel/tree/main/tests/Feature/Architecture

The purpose of these tests are to ensure that each domain is able to communicate freely with its own namespace, but only communicates with other domains via their `Contracts`

Therefore, we can enforce internal boundaries via...

```php
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
```

And enforce external boundaries via...

```php
describe('external boundaries', function () {
    test('models')
        ->expect('App\Domains\Support\Models')
        ->toOnlyBeUsedIn('App\Domains\Support');

    test('services')
        ->expect('App\Domains\Support\Services')
        ->toOnlyBeUsedIn('App\Domains\Support');
});
```

## Usage

Run tests using

```php
./vendor/bin/pest
```
