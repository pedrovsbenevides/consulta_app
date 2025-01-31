<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {

            $pacientes = DB::table('paciente')->get()->all();

            $medicos = DB::table('medico')->get()->all();

            DB::beginTransaction();

            DB::table('consulta')->insert([
                [
                    'uuid' => Str::uuid(),
                    'medico_id'=> $medicos[0]->id,
                    'paciente_id'=> $pacientes[0]->id,
                    'data'=> '2025-01-30 09:00:00',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'uuid' => Str::uuid(),
                    'medico_id'=> $medicos[1]->id,
                    'paciente_id'=> $pacientes[1]->id,
                    'data'=> '2025-02-04 12:00:00',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'uuid' => Str::uuid(),
                    'medico_id'=> $medicos[1]->id,
                    'paciente_id'=> $pacientes[0]->id,
                    'data'=> '2025-02-20 15:00:00',
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
