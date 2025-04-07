<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;


class UsuarioController extends Controller
{
    # Retornar vistas
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

    #Requests a backend

    #Confirmar que los detalles de login son validos
    public function confirmarLogin(Request $request){
        #Variable de guzzle Client
        $cliente = new Client();
        #No se si hacerlo asi es una buena idea
        $correo = $request->correo;
        $contrasenia = $request->constrasenia;

        #Haciendo la request con los parametros de la form

        $responseDeForm = $cliente->request('POST', 'urlBackend',
            ['form_params' => [
                'correo' => $correo,
                'contrasenia'=>$contrasenia
            ]
            ]
        );
        #Respuesta si es 200 llevar a la pagina principal, si no regresar
        if ($responseDeForm->getStatusCode()==200){
            /**
             * (EN PROCESO)Conseguimos el body de la request y lo guardamos en las cookies
             * El usuario es redirecionado a la pagina de inicio, pagina con empresas
             */
            return view('empresas');
        } else if($responseDeForm->getStatusCode()==400){
            /**
             * Regreasamos al inicio de session
             * (PROBAR) Mostar modal o popup de que el usuario no se pudo identificar correctamente.
             */
            return view('iniciar_sesion');
        }


    }
}