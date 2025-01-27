<?php

namespace App\Services;

use App\Repositories\CidadeRepository;
use App\Services\Contracts\CidadeContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CidadeService implements CidadeContract
{
    private CidadeRepository $repo;

    public function __construct(CidadeRepository $repo)
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
}
