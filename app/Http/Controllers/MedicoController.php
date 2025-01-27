<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicoRequest;
use App\Services\Contracts\MedicoContract;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    private MedicoContract $service;

    public function __construct(MedicoContract $service)
    {
        $this->service = $service;
    }

    public function listar(?string $nome = null)
    {
        try {
            $data = $this->service->getAll($nome);

            return response()->json($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function listarPorCidade(int $id, ?string $nome = null)
    {

        try {
            $data = $this->service->getByCidade($id, $nome);

            return response()->json($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function cadastrar(int $cidadeId, CreateMedicoRequest $request)
    {

        try {
            $data = $request->validated();

            return $this->service->create($cidadeId, $data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
