<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passenger;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages/cadastrar");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $passenger = new Passenger();
        $passenger->nome = $request->input('nome');
        $passenger->sobrenome = $request->input('sobrenome');
        $passenger->senha = $request->input('senha');
        $passenger->rg = $request->input('rg');
        $passenger->cpf = $request->input('cpf');
        $passenger->sexo = $request->input('sexo');
        $passenger->dt_nasc = $request->input('dt_nasc');
        $passenger->telefone= $request->input('telefone');
        $passenger->email= $request->input('email');
        $passenger->cep = $request->input('cep');
        $passenger->cidade = $request->input('cidade');
        $passenger->logradouro = $request->input('logradouro');
        $passenger->numero = $request->input('numero');
        $passenger->complemento = $request->input('complemento');
        $passenger->uf = $request->input('uf');
        $passenger->bairro = $request->input('bairro');
        $passenger->pais = $request->input('pais');
        $passenger->save();
        return redirect('/');
        //return redirect()->route('profile', [$user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
