<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function store()
    {
        Client::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone')
        ]);
    }

    public function update(Client $client)
    {
        $success = $client->update([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone')
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function destroy(Client $client)
    {
        $success = $client->delete();

        return [
            'success' => $success
        ];
    }
}
