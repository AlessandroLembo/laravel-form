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
        Client::create($request->validate([
            'codice' => ['required', 'string', 'unique:clients', 'max:7'],
            'nome' => ['required', 'string', 'unique:clients', 'max:50'],
            'email' => ['required', 'string', 'unique:clients', 'max:50'],
            'telefono' => ['required', 'string', 'unique:clients', 'max:10'],
            'partita_iva' => ['nullable', 'string', 'max:11'],
        ]));

        return to_route('Clients');
    }
}
