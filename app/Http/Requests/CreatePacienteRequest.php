<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePacienteRequest extends FormRequest
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
            'cpf' => 'required|string|unique:paciente,cpf|regex:/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/|max:14',
            'celular' => 'required|string|max:16',
        ];
    }

    public function messages()
    {
        return [
            'cpf.regex' => 'cpf é inválido',
            'cpf.unique' => 'cpf indisponível',
            'cpf.max' => 'cpf excede o tamanho máximo',
            'celular.max' => 'celular excede o tamanho máximo',
            'nome.required' => 'nome é necessário',
            'cpf.required' => 'cpf é necessário',
            'celular.required' => 'celular é necessário',
        ];
    }
}
