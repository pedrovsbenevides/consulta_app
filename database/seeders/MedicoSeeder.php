<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {

            $cidades = DB::table('cidade')->get()->all();

            DB::beginTransaction();

            DB::table('medico')->insert([
                [
                    'uuid' => Str::uuid(),
                    "nome" => "Dr. Carlos Eduardo",
                    "cidade_id" => $cidades[0]->id,
                    "especialidade" => "Nefrologista",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'uuid' => Str::uuid(),
                    "nome" => "Dra. Alessandra Moura",
                    "cidade_id" => $cidades[0]->id,
                    "especialidade" => "Neurologista",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'uuid' => Str::uuid(),
                    "nome" => "Dra. Daniel Souza",
                    "cidade_id" => $cidades[1]->id,
                    "especialidade" => "Cardiologista",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
            ]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
