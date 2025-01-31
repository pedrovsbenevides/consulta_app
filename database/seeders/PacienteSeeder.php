<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();

            DB::table('paciente')->insert(
                [
                    [
                        'uuid' => Str::uuid(),
                        'nome' => 'Natália Sophia da Silva',
                        'cpf' => '643.465.810-99',
                        'celular' => '(71) 9 8630-3170',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'uuid' => Str::uuid(),
                        'nome' => 'Levi Lucca Breno da Mata',
                        'cpf' => '429.250.640-00',
                        'celular' => '(84) 9 9867-7041',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'uuid' => Str::uuid(),
                        'nome' => 'Jennifer Juliana Peixoto',
                        'cpf' => '426.195.280-70',
                        'celular' => '(92) 9 9934-7425',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
                ]
            );

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
