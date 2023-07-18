<?php

namespace App\Http\Controllers;

use App\Models\Client;
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
}
