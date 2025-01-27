<?php

namespace App\Repositories;

use App\Models\Cidade;

class CidadeRepository extends BaseRepository
{
    public function __construct(Cidade $model)
    {
        $this->setModel($model);
        $this->setQuery($model->query());
    }

    public function getByNome(string $nome)
    {
        $this->like('nome', $nome);

        return $this;
    }
}
