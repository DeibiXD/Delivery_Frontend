<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delivery</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('img/delivery_icono.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="logo">
        <img src="{{ asset('img/delivery_icono.png') }}" alt="Logo" style="width: 50px; height: 50px;">
        <h2 style="color: #fff">elivery</h2>
    </div>
    <div class="contenedor-iniciar-sesion">
        <div>
            <img src="{{ asset('img/banner_delivery.jpg') }}" alt="Banner Delivery" class="banner">
        </div>
        <form action="">
            <div class="mb-3 contenedor-campo">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="text" class="form-control campo" id="correo" placeholder="correo electrónico" name="correo">
            </div>
            <div class="mb-3 contenedor-campo">
                <label for="contrasenia" class="form-label">Contraseña</label>
                <input type="password" class="form-control campo" id="contrasenia" placeholder="Contraseña" name="contrasenia">
            </div>
            <div class="mb-3">
                <a href="{{ route('categorias') }}"  class="boton-iniciar-sesion">Iniciar sesión</a>
            </div>
            <div class="mb-3">
                <a href="{{ route('registro') }}" class="boton-registro">Crear nueva cuenta</a>
            </div>
            <div>
                <p style="width: 350px; font-size: 9px; display: flex; justify-content: center;">Al continuar, aceptas nuestros términos de uso y políticas de privacidad</p>
            </div>
        </form>
    </div>
</body>
</html>