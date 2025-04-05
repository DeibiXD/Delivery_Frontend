<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('iniciar_sesion');
})->name('iniciar_sesion');

Route::get('/delivery/registro', [UsuarioController::class, 'registro'])->name('registro');

Route::get('/delivery/categorias', [UsuarioController::class, 'categorias'])->name('categorias');

Route::get('/delivery/empresas', [UsuarioController::class, 'empresas'])->name('empresas');

Route::get('/delivery/carrito', [UsuarioController::class, 'carrito'])->name('carrito');

Route::get('/delivery/confirmar/pedido', [UsuarioController::class, 'confirmarPedido'])->name('confirmar_pedido');
