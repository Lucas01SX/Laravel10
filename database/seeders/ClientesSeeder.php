<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    
    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'Ronaldinho Socer',
                'email' => 'v@gmail.com',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' =>  '211448',
                'bairro' => 'jardim x',
                
            ]
        );

        Cliente::create(
            [
                'nome' => 'Emerson Chulapa',
                'email' => 'e@gmail.com',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' =>  '97977755',
                'bairro' => 'jardim x',
                
            ]
        );
    }
}
