<?php

namespace App\Services\Contracts;

use App\Models\Medico;
use Illuminate\Database\Eloquent\Collection;

interface MedicoContract extends Contract
{
    public function getAll(string|null $nome): Collection;

    public function getByCidade(int $cidadeId, string|null $nome): Collection;

    public function create(int $cidadeId, array $data): Medico;
}
