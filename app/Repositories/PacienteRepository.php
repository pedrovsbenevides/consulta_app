<?php

namespace App\Repositories;

use App\Models\Paciente;

class PacienteRepository extends BaseRepository
{
    public function __construct(Paciente $model)
    {
        $this->setModel($model);
        $this->setQuery($model->query());
    }
}
