<?php

namespace App\Services\Country;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class CountryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(CountryServiceInterface::class, fn() => new CountryService());
    }

    public function provides(): array
    {
        return [CountryServiceInterface::class];
    }
}