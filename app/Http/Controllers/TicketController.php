<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

use App\Ticket;
use App\User;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::orderBy('id', 'asc')->get();
        return view("pages/listaPassageiros")->with('tickets', $tickets);
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
    public function store(CreateUserRequest $request)
    {
        $user = new User();
        $user->name = $request->input('nome');
        $user->email = $request->input('email');
        $user->password = $request->input('senha');
        $user->save();

        $ticket = new Ticket();
        $ticket->user_id = $user->id;
        $ticket->nome = $request->input('nome');
        $ticket->sobrenome = $request->input('sobrenome');
        $ticket->rg = $request->input('rg');
        $ticket->cpf = $request->input('cpf');
        $ticket->sexo = $request->input('sexo');
        $ticket->dt_nasc = $request->input('dt_nasc');
        $ticket->telefone= $request->input('telefone');
        $ticket->cep = $request->input('cep');
        $ticket->rua = $request->input('rua');
        $ticket->cidade = $request->input('cidade');
        $ticket->numero = $request->input('numero');
        $ticket->complemento = $request->input('complemento');
        $ticket->uf = $request->input('uf');
        $ticket->bairro = $request->input('bairro');
        $ticket->pais = $request->input('pais');
        $ticket->save();

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
        $ticket = Ticket::findOrFail($id);
        return view("pages/editar")->with('ticket', $ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::where('id',$id)->first();
        $ticket->delete();
        return 'funcionou';
    }
}
