<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pet;

class PetsController extends Controller
{
    public function index()
    {
        $collection = Pet::with('client')->limit(20)->get();

        foreach ($collection as $petInfo) {

            $petInfo->owner = $petInfo->client->surname . " " . $petInfo->client->first_name;
        }
        
        return $collection;
    }

    public function show(Request $request)
    {
        if ($request->input('id')) {
            $pet_id = $request->input('id');
        
            $pet = Pet::with('client')->findOrFail($pet_id);

            $pet->owner = $pet->client->surname . " " . $pet->client->first_name;

            return $pet;
        } else {
            return "missing id";
        }

        

       
    }

    public function search(Request $request)
    {
        $text = $request->input('search');

        $collection = Pet::with('client')->where('name', 'like',"{$text}%")->limit(20)->get();

        foreach ($collection as $petInfo) {

            $petInfo->owner = $petInfo->client->surname . " " . $petInfo->client->first_name;
        }
        
        return $collection;
    }
}
