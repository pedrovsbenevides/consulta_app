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

    public function messages()
    {
        return [
            'medico_id.required' => 'medico_id é necessário',
            'medico_id.exists' => 'medico_id é inválido',
            'paciente_id.required' => 'paciente_id é necessário',
            'paciente_id.exists' => 'paciente_id inválido',
            'data.required' => 'data é necessário',
            'data.date_format' => 'data deve estar no formato Y-m-d H:i:s',
        ];
    }
}
