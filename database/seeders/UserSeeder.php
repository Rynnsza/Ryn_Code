<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        if (User::where('email', 'admin@ryncode.id')->doesntExist()) {
            User::create([
                'name' => 'Admin RynCode',
                'email' => 'admin@ryncode.id',
                'password' => Hash::make('password'),
                'foto' => null,
            ]);
        }
    }
}
