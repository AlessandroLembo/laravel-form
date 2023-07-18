<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'codice' => '0023458',
                'nome' => 'CilentoMania',
                'email' => 'cilentomania@yahoo.it',
                'telefono' => '3334455666',
                'partita_iva' => '12345678987'
            ],
            [
                'codice' => '0044667',
                'nome' => 'EvolutionTech',
                'email' => 'evolution@libero.it',
                'telefono' => '3284422111',
                'partita_iva' => '12332112345'
            ],
            [
                'codice' => '0033888',
                'nome' => 'SummerCommunication',
                'email' => 'summer@libero.it',
                'telefono' => '3236699089',
                'partita_iva' => '22233344455'
            ],
            [
                'codice' => '0055221',
                'nome' => 'BorgoBurger',
                'email' => 'burger@yahoo.it',
                'telefono' => '3256677888',
                'partita_iva' => '23456789989'
            ],
            [
                'codice' => '0077331',
                'nome' => 'NewEnergy',
                'email' => 'energy@yahoo.it',
                'telefono' => '3209988345',
                'partita_iva' => '33554422777'
            ],

        ];

        foreach ($clients as $client) {
            $new_client = new Client();

            $new_client->codice = $client['codice'];
            $new_client->nome = $client['nome'];
            $new_client->email = $client['email'];
            $new_client->telefono = $client['telefono'];
            $new_client->partita_iva = $client['partita_iva'];

            $new_client->save();
        }
    }
}
