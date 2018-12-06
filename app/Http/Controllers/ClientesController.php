<?php

namespace App\Http\Controllers;

use App\Clientes;
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

        return $view;
    }
}
