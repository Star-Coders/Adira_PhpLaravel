<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Bruno Marcos Keil',
            'email' => 'bruno@gmail.com',
            'password' => bcrypt('123'),
            'telefone' => '47 988680701',
            'cep' => '89026-510',
            'uf' => 'SC',
            'cidade' => 'Blumenau',
            'logradouro' => 'Bairro progresso rua colatina',
            'numero' => '232'
        ]);
    }
}
