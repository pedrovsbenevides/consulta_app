<?php

namespace App\Services\Contracts;

use App\Models\Paciente;

interface PacienteContract extends Contract
{
    public function create(array $data): Paciente;

    public function update(int $pacienteId, array $data): Paciente;
}
