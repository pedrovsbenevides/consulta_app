<?php

namespace App\Http\Controllers;

use App\Services\Contracts\CidadeContract;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    private CidadeContract $service;

    public function __construct(CidadeContract $service)
    {
        $this->service = $service;
    }

    public function listar(Request $request)
    {
        try {
            $nome = $request->get('nome');

            $data = $this->service->getAll($nome);

            return response()->json($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
