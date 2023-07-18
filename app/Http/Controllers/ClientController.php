<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard');
    }

    public function create()
    {
        return Inertia::render('Clients/NewClient', [
            'clients' => Client::all()
        ]);
    }
}
