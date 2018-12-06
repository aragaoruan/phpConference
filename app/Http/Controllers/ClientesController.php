<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Http\Requests\ClientesRequest;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $view = view('clientes.index');

        $clientes =  Clientes::all();

        $view->clientes = $clientes;

//        return $view->with('clientes', $clientes);

        return $view;
    }

    public function add(){
        $view = view('clientes.add');
        $view->model = null;
        return $view;
    }
    public function save(ClientesRequest $request){
        $cliente = new Clientes();
        $cliente->name = $request->get('name');
        $cliente->telefone = $request->get('telefone');
        $cliente->cpf = $request->get('cpf');
        $cliente->email = $request->get('email');
        $cliente->save();
        return redirect(route('clientes'));
    }
}
