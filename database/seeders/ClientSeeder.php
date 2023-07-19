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
                'code' => '0023458',
                'name' => 'CilentoMania',
                'email' => 'cilentomania@yahoo.it',
                'phone_number' => '3334455666',
                'vat_number' => '12345678987'
            ],
            [
                'code' => '0044667',
                'name' => 'EvolutionTech',
                'email' => 'evolution@libero.it',
                'phone_number' => '3284422111',
                'vat_number' => '12332112345'
            ],
            [
                'code' => '0033888',
                'name' => 'SummerCommunication',
                'email' => 'summer@libero.it',
                'phone_number' => '3236699089',
                'vat_number' => '22233344455'
            ],
            [
                'code' => '0055221',
                'name' => 'BorgoBurger',
                'email' => 'burger@yahoo.it',
                'phone_number' => '3256677888',
                'vat_number' => '23456789989'
            ],
            [
                'code' => '0077331',
                'name' => 'NewEnergy',
                'email' => 'energy@yahoo.it',
                'phone_number' => '3209988345',
                'vat_number' => '33554422777'
            ],

        ];

        foreach ($clients as $client) {
            $new_client = new Client();

            $new_client->code = $client['code'];
            $new_client->name = $client['name'];
            $new_client->email = $client['email'];
            $new_client->phone_number = $client['phone_number'];
            $new_client->vat_number = $client['vat_number'];

            $new_client->save();
        }
    }
}
