<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PetRequest;
use App\Client;
use App\Pet;

class AdminController extends Controller
{
    public function create()
    {
        $clients = Client::all();
        return view('form', compact('clients'));
    }

    public function store(PetRequest $request)
    {
        $validated = $request->validated();
        
        $pet = Pet::create([
            'name'=>$request->input('name'),
            'breed'=>$request->input('breed'),
            'weight'=>$request->input('weight'),
            'age'=>$request->input('age'),
            'client_id'=>$request->input('client_id')
        ]);

        return 'Pet saved succesfully!!!!!!!!';
        
    }
}
