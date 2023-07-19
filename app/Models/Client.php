<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['codice', 'partita_iva', 'nome', 'email', 'telefono'];

    // public $table = 'clients';
}
