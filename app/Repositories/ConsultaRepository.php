<?php

namespace App\Repositories;

use App\Models\Consulta;

class ConsultaRepository extends BaseRepository
{
    public function __construct(Consulta $model)
    {
        $this->setModel($model);
        $this->setQuery($model->query());
    }
}
