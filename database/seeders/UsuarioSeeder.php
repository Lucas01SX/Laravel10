<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    
    public function run(): void
    {
        User::create(
            [
                'name' => 'Andre',
                'email' => '12345@gmail.com',
                'password' => Hash::make('senha123')
            ]
        );
    }
}
