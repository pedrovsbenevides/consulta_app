<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConsultaRequest;
use App\Services\Contracts\ConsultaContract;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    private ConsultaContract $service;

    public function __construct(ConsultaContract $service)
    {
        $this->service = $service;
    }

    public function agendar(CreateConsultaRequest $request)
    {
        try {
            $data = $request->validated();

            $data = $this->service->create($data);

            return response()->json($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
