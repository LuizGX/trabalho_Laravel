<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = "tickets";

    protected $fillable = [
        'nome', 'sobrenome', 'rg', 'cpf', 'sexo', 'dt_nasc', 'telefone', 'cep',
        'cidade', 'numero', 'complemento', 'uf', 'rua', 'bairro', 'pais', 'email', 'senha',
    ];

    public function user(){
            return $this->belongsTo('App\User');
    }
}
