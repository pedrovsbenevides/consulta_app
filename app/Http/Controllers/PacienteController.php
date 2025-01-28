<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Services\Contracts\PacienteContract;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    private PacienteContract $service;

    public function __construct(PacienteContract $service)
    {
        $this->service = $service;
    }

    public function cadastrar(CreatePacienteRequest $request)
    {

        try {
            $data = $request->validated();

            $paciente = $this->service->create($data);

            return response()->json($paciente);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function atualizar(int $pacienteId, UpdatePacienteRequest $request)
    {

        try {
            $data = $request->validated();

            $paciente = $this->service->update($pacienteId, $data);

            return response()->json($paciente);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function listarPorMedico(int $medicoId, Request $request)
    {

        try {
            $flagAgendadas = $request->get('apenas-agendadas');

            $data = $this->service->listarPorMedico($medicoId, $flagAgendadas);

            return response()->json($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
