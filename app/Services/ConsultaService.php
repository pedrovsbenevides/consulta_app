<?php

namespace App\Services;

use App\Models\Consulta;
use App\Repositories\ConsultaRepository;
use App\Services\Contracts\ConsultaContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConsultaService implements ConsultaContract
{
    private ConsultaRepository $repo;

    public function __construct(ConsultaRepository $repo)
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

    public function create(array $data): Consulta
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
}
