<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|alpha',
            'sobrenome' => 'required|alpha',
            'rg' => 'required',
            'cpf' => 'required|cpf',
            'sexo' => 'required',
            'dt_nasc' => 'required',
            'telefone' => 'required|numeric',
            'cep' => 'required',
            'cidade' => 'required|alpha',
            'numero' => 'required|numeric',
            'complemento' => 'required|alpha_num',
            'uf' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'pais' => 'required|alpha',
        ];
    }
}
