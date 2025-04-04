<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
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
            <h2 style="color: #fff">elivery</h2>
        </div>
        <div style="margin-right: 250px"> 
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
            <p>¿En dónde quieres ordenar?</p>
        </div>
        <div class="categorias">
            <div class="tarjeta-empresa">
                <img src="{{ asset('img//logo_empresa.png') }}" alt="Logo" class="logo-empresa">
                <p><b>Nombre_empresa</b><br> Costo_envio</p>
            </div>
        </div>
    </div>
    <footer>
        <p>Porque tu tiempo vale, nosotros lo llevamos por ti.</p>
    </footer>
</body>
</html>