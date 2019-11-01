<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Client;

class ClientController extends Controller
{
    public function create()
    {
        return view('clients/form');
    }

    public function store(ClientRequest $request)
    {
        $client = Client::create([
            'first_name'=>$request->input('first_name'),
            'surname'=>$request->input('surname'),
        ]);

        return 'Client created succesfully!!!!!!!!';
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients/form', compact('client'));
    }

    public function update(ClientRequest $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->first_name = $request->input('first_name');
        $client->surname = $request->input('surname');
        $client->save();
          

        return 'Client updated succesfully!!!!!!!!';
    }
}
