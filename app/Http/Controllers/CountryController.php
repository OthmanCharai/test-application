<?php

namespace App\Http\Controllers;

use App\Services\Country\CountryServiceInterface;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function __construct(private readonly CountryServiceInterface $countryService)
    {
    }

    public function __invoke(Request $request)
    {
        $searchQuery = $request->input('query', null);

        if (!$searchQuery) {
            return response()->json(["data" => []], 200);
        }

        return response()->json($this->countryService->search($searchQuery), 200);
    }
}
