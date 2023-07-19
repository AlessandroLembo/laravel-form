<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            'name' => 'Alessandro',
            'email' => 'ale@yahoo.it',
            'password' => bcrypt('omniasoft'),
        ];

        $new_user = new User();

        $new_user->name = $users['name'];
        $new_user->email = $users['email'];
        $new_user->password = $users['password'];

        $new_user->save();
    }
}
