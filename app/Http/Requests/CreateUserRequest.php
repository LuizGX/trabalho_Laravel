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
            'nome' => 'required',
            'sobrenome' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'sexo' => 'required',
            'dt_nasc' => 'required',
            'telefone' => 'required',
            'cep' => 'required',
            'cidade' => 'required',
            'numero' => 'required',
            'complemento' => 'required',
            'uf' => 'required',
            'bairro' => 'required',
            'pais' => 'required',

            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
        ];
    }
}
