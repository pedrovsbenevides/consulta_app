<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMedicoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string',
            'cidade_id' => 'required|int|exists:cidade,id',
            'especialidade' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'nome é necessário',
            'cidade_id.required' => 'cidade_id é necessário',
            'cidade_id.exists' => 'cidade_id inválido',
            'especialidade.required' => 'especialidade é necessário',
        ];
    }
}
