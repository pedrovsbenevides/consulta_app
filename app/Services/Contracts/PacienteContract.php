<?php

namespace App\Services\Contracts;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Collection;

interface PacienteContract extends Contract
{
    public function create(array $data): Paciente;

    public function update(int $pacienteId, array $data): Paciente;

    public function listarPorMedico(int $medicoId, bool|null $flagAgendadas): Collection;
}
