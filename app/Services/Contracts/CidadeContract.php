<?php

namespace App\Services\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface CidadeContract extends Contract
{
    public function getAll(string|null $nome): Collection;
}
