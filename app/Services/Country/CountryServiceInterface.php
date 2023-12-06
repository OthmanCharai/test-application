<?php

namespace App\Services\Country;

interface CountryServiceInterface
{
    /**
     * Search a city or country
     *
     * @param string $searchQuery
     *
     * @return array
     */
    public function search(string $searchQuery): array;
}