<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    public function index()
    {
        return Inertia::render('Clients/Index', [
            'clients' => Client::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Clients/Create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $new_client = new Client();

        $new_client->codice = $data['code'];
        $new_client->partita_iva = $data['vat_number'];
        $new_client->nome = $data['name'];
        $new_client->email = $data['email'];
        $new_client->telefono = $data['phone_number'];

        $new_client->save();

        return to_route('Clients');
    }
}
