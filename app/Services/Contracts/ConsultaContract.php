<?php

namespace App\Services\Contracts;

use App\Models\Consulta;

interface ConsultaContract extends Contract
{
    public function create(array $data): Consulta;
}
