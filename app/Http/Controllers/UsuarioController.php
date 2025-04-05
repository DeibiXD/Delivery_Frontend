<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function registro(){
        return view('registro');
    }

    public function categorias(){
        return view('categorias');
    }

    public function empresas(){
        return view('empresas');
    }

    public function carrito(){
        return view('carrito');
    }

    public function confirmarPedido(){
        return view('confirmar_pedido');
    }
}