<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cidade')->insert(
            [
                'uuid' => Str::uuid(),
                'nome' => 'Salvador',
                'estado' => 'BA'
            ],
            [
                'uuid' => Str::uuid(),
                'nome' => 'São Paulo',
                'estado' => 'SP'
            ],
            [
                'uuid' => Str::uuid(),
                'nome' => 'Rio de Janeiro',
                'estado' => 'RJ'
            ]
        );
    }
}
