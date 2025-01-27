<?php

namespace App\Repositories;

use App\Models\Medico;

class MedicoRepository extends BaseRepository
{
    public function __construct(Medico $model)
    {
        $this->setModel($model);
        $this->setQuery($model->query());
    }

    public function getByNome(string $nome)
    {
        $this->like('nome', $nome);

        return $this;
    }

    public function getByCidade(int $cidadeId)
    {
        $this->where('cidade_id', $cidadeId);

        return $this;
    }
}
