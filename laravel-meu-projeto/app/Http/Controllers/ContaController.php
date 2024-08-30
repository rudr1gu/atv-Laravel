<?php

namespace App\Http\Controllers;

use App\Models\Conta;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function create()
    {
        // Carregar a VIEW
        return view('contas.create');
    }

    public function store(Request $request)
    {
        // Cadastrar no banco de dados na tabela contas os valores de todos os campos
        Conta::create($request->all());

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('conta.show')->with('success', 'Conta cadastrada com sucesso');
    }
}
