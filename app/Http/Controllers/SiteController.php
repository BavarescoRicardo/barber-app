<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class SiteController extends Controller
{
    public function index() {
        $clientes = Cliente::all();

        return view('index', ['clientes' => $clientes]);
    }

    public function cliente() {
        return view('novoCliente');
    }

    public function store(Request $request) {
        $cliente = new cliente;

        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;
        $cliente->email = $request->email;

        $cliente->save();

        return redirect('/');
    }

    public function delete($idCliente) {       
        $cliente = Cliente::findOrFail($idCliente);
        
        $cliente->delete();

        return redirect('/');
    } 

    public function sobre() {
        return view('sobre');
    }    
}
