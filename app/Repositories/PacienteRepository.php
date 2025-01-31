<?php

namespace App\Repositories;

use App\Models\Paciente;
use Carbon\Carbon;

class PacienteRepository extends BaseRepository
{
    public function __construct(Paciente $model)
    {
        $this->setModel($model);
        $this->setQuery($model->query());
    }

    public function getByMedico(int $medicoId)
    {
        $this->getQuery()->whereRelation('consulta', 'medico_id', '=', $medicoId);

        return $this;
    }

    public function onlyAgendadas()
    {
        $this->getQuery()->whereRelation('consulta', 'data', '>', Carbon::now());

        return $this;
    }

    public function withConsultasByMedico(int|null $medicoId = null)
    {
        $this->getQuery()->withWhereHas('consulta', function ($query) use ($medicoId) {
            if ($medicoId) {
                $query->where('medico_id', '=', $medicoId);
            }
        });

        return $this;
    }
}
