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
            'code' => ['required', 'string', 'unique:clients', 'max:7'],
            'name' => ['required', 'string', 'unique:clients', 'max:50'],
            'email' => ['required', 'string', 'unique:clients', 'max:50'],
            'phone_number' => ['required', 'string', 'unique:clients', 'max:10'],
            'vat_number' => ['nullable', 'string', 'max:11'],
        ]));

        return to_route('Clients');
    }
}
