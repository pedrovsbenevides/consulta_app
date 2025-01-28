<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateConsultaRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'medico_id' => 'required|int|exists:medico,id',
            'paciente_id' => 'required|int|exists:paciente,id',
            'data' => 'required|date_format:Y-m-d H:i:s'
        ];
    }
}
