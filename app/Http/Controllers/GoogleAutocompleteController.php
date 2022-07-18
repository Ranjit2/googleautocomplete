<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Integration\AutocompleteHandler;

class GoogleAutocompleteController extends Controller
{

    public $googleAutocomplete;

    public function __construct(AutocompleteHandler $googleAutocomplete)
    {
        $this->googleAutocomplete = $googleAutocomplete;
    }

    public function index(): View
    {
        return view('form');
    }

    public function getPlaceId(Request $request): JsonResponse
    {
        return $this->googleAutocomplete->placeId($request->inputData);
    }

    public function findAddressBasedOnPlaceId(Request $request): JsonResponse
    {
        return $this->googleAutocomplete->addressBasedOnPlaceId($request->placeId);
    }
}
