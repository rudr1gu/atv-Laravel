<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conta;

class ContaController extends Controller
{
    // Listar as contas
    public function index()
    {
        // Carregar a VIEW
        return view('contas.index');
    }

    // Detalhes da conta
    public function show()
    {
        // Carregar a VIEW
        return view('contas.show');
    }

    // Carregar o formulário cadastrar nova conta
    public function create()
    {
        // Carregar a VIEW
        return view('contas.create');
    }

    // Cadastrar no banco de dados nova conta
    public function store(Request $request)
    {
        // Cadastrar no banco de dados na tabela contas os valores de todos os campos
        Conta::create($request->all());
    
        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('conta.show')->with('success', 'Conta cadastrada com sucesso');
    }

    // Carregar o formulário editar a conta
    public function edit()
    {
        // Carregar a VIEW
        return view('contas.edit');
    }

    // Editar no banco de dados a conta
    public function update()
    {
        dd("Editar");
    }

    // Excluir a conta do banco de dados
    public function destroy()
    {
        dd("Apagar");
    }

}
