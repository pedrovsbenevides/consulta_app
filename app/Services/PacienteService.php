<?php

namespace App\Services;

use App\Models\Paciente;
use App\Repositories\PacienteRepository;
use App\Services\Contracts\PacienteContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PacienteService implements PacienteContract
{
    private PacienteRepository $repo;

    public function __construct(PacienteRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getById(int $id): Model
    {
        try {

            return $this->repo->find($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getByUuid(string $uuid): Model
    {
        try {

            return $this->repo->find($uuid);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(array $data): Paciente
    {
        try {
            $data['uuid'] = Str::uuid();

            DB::beginTransaction();

            $paciente = $this->repo->getModel()->create($data);

            DB::commit();

            return $paciente;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(int $pacienteId, array $data): Paciente
    {
        try {
            $paciente = $this->repo->find($pacienteId);

            $paciente->update([
                'nome' => $data['nome'] ?? $paciente->nome,
                'celular' => $data['celular'] ?? $paciente->celular,
            ]);

            return $paciente;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
