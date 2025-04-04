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
<body style="color: #fff">
    <div class="encabezado">
        <div class="logo">
            <img src="{{ asset('img/delivery_icono.png') }}" alt="Logo" style="width: 50px; height: 50px;">
            <h2 style="color: #fff; font-size: 25px; font-weight: bold;">elivery</h2>
        </div>
        <div style="margin-right: 240px"> 
            <p>Enviar a <br> Mi ubicación.</p>
        </div>
        <div class="perfil">
            <i class="fa-solid fa-user" style="padding: 20px; font-size: 25px;"></i>
            <p>Mi nombre de usuario</p>
        </div>
        <div>
            <a href="{{ route('iniciar_sesion') }}" style="text-decoration: none; color: inherit;">
                <i class="fa-solid fa-right-from-bracket" style="font-size: 25px;"></i>
            </a>
        </div>
    </div>
    <div class="cuerpo">
        <div>
            <p>¡Hola Mi_nombre! <br> ¿Qué necesitas?</p>
        </div>
        <div class="categorias">
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-cat icono-categoria"></i>
                <p>Mascotas</p>
            </div>
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-wine-bottle icono-categoria"></i>
                <p>Bebidas</p>
            </div>
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-prescription-bottle-medical icono-categoria"></i>
                <p>Farmacias</p>
            </div>
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-mug-hot icono-categoria"></i>
                <p>Cafeterías</p>
            </div>
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-burger icono-categoria"></i>
                <p>Restaurantes</p>
            </div>
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-store icono-categoria"></i>
                <p>Supermercados</p>
            </div>
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-lemon icono-categoria"></i>
                <p>Frutas</p>
            </div>
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-car-side icono-categoria"></i>
                <p>Juguetes</p>
            </div>
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-prescription-bottle-medical icono-categoria"></i>
                <p>Farmacias</p>
            </div>
            <div class="tarjeta-categoria">
                <i class="fa-solid fa-prescription-bottle-medical icono-categoria"></i>
                <p>Farmacias</p>
            </div>
        </div>
    </div>
    <footer>
        <p>Porque tu tiempo vale, nosotros lo llevamos por ti.</p>
    </footer>
</body>
</html>