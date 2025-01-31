<?php

namespace App\Services;

use App\Models\Medico;
use App\Repositories\MedicoRepository;
use App\Services\Contracts\MedicoContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MedicoService implements MedicoContract
{
    private MedicoRepository $repo;

    public function __construct(MedicoRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getAll(?string $nome): Collection
    {
        try {
            if (is_null($nome)) {

                return $this->repo->all();
            } else {

                return $this->repo->getByNome($nome)->get();
            }
        } catch (\Throwable $th) {
            throw $th;
        }
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

    public function getByCidade(int $cidadeId, ?string $nome): Collection
    {
        try {
            $query = $this->repo->getByCidade($cidadeId);

            if (is_null($nome)) {
                return $query->get();
            } else {

                return $query->getByNome($nome)->get();
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(array $data): Medico
    {
        try {
            $data['uuid'] = Str::uuid();

            DB::beginTransaction();

            $medico = $this->repo->getModel()->create($data);

            DB::commit();

            return $medico;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
