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

    public function sobre() {
        return view('sobre');
    }
}
