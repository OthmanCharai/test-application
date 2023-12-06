<?php

namespace App\Services\Country;

use App\Models\Country;

class CountryService implements CountryServiceInterface
{

    /**
     * @inheritDoc
     */
    public function search(string $searchQuery): array
    {
        return Country::query()
            ->where('name', 'like', "%" . $searchQuery . "%")
            ->orWhere('code', 'like', "%" . $searchQuery . "%")
            ->orWhereHas('cities', function ($query) use ($searchQuery) {
                $query->where('name', 'like', "%" . $searchQuery . "%");
            })
            ->with(['cities' => function ($query) use ($searchQuery) {
                $query->where('name', 'like', "%" . $searchQuery . "%");
            }])
            ->get()->toArray();
    }
}