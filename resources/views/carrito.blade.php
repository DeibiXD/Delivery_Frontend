<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
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
        <div class="logo" style="display: flex; align-items: center;">
            <img src="{{ asset('img/delivery_icono.png') }}" alt="Logo" style="width: 50px; height: 50px;">
            <h2 style="color: #fff; font-size: 25px; font-weight: bold; margin-top: 5px;">elivery</h2>
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
        <div>
            <a style="text-decoration: none; color: inherit;">
                <i class="fa-solid fa-cart-shopping" style="font-size: 25px;" data-bs-toggle="modal"
                    data-bs-target="#modal-carrito"></i>
            </a>
        </div>
        <!-- Modal  Carrito-->
        <div class="modal fade" id="modal-carrito" tabindex="-1" aria-labelledby="modalCarritoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="color: black">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Mi carrito.</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="tarjeta-carrito">
                            <img src="{{ asset('img/img-producto.png') }}" alt="Logo" style="width: 100px; height: 100px;">
                            <div class="d-flex flex-column">
                                <div class="mb-3">
                                    <p>Nombre_Producto</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <button class="btn" id="decrease"
                                            style="background-color: #e23636; color: #fff;">-</button>
                                        <span id="quantity" class="fs-4">1</span>
                                        <button class="btn" id="increase"
                                            style=" background-color: #009a9a; color: #fff;">+</button>
                                    </div>
                                    <div>
                                        <p>Precio: 00.00 Lps.</p>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="boton-eliminar"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <div class="subtotal-grid">
                            <p>Subtotal:</p>
                            <p>00.00 Lps.</p>
                        </div>                      
                            <a class="boton-iniciar-sesion">Continuar con la compra</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cuerpo">
        <div>
            <p style="margin-top: 15px">¿En dónde quieres ordenar?</p>
        </div>
        <div class="categorias">
            <div class="tarjeta-producto">
                <img src="{{ asset('img/img-producto.png') }}" alt="Logo" style="width: 100px; height: 100px;">
                <div>
                    <a href="{{ route('registro') }}" class="boton-agregar" data-bs-toggle="modal"
                        data-bs-target="#modal-seleccion">+ Agregar</a>
                </div>
                <!-- Modal seleccion de cantidades-->
                <div class="modal fade" id="modal-seleccion" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content modal-productos">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Nombre_Producto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ asset('img/img-producto.png') }}" alt="Logo"
                                    style="width: 100px; height: 100px;">
                                <p>Precio: 00.00 Lps</p>
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <button class="btn" id="decrease"
                                        style="background-color: #e23636; color: #fff;">-</button>
                                    <span id="quantity" class="fs-4">1</span>
                                    <button class="btn" id="increase"
                                        style=" background-color: #009a9a; color: #fff;">+</button>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <p>Descripcion: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="mb-1">
                                    <a href="{{ route('confirmar_pedido') }}"  class="boton-registro m-0">Confirmar</a>
                                </div>
                                <div class="mb-1">
                                    <a href="{{ route('carrito') }}" class="boton-cancelar m-0">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p><b>Precio</b><br> Nombre</p>
            </div>
        </div>
    </div>
    <footer>
        <p>Porque tu tiempo vale, nosotros lo llevamos por ti.</p>
    </footer>
    <script>
        let quantity = 1;
        document.getElementById("increase").addEventListener("click", function () {
            quantity++;
            document.getElementById("quantity").innerText = quantity;
        });

        document.getElementById("decrease").addEventListener("click", function () {
            if (quantity > 1) {
                quantity--;
                document.getElementById("quantity").innerText = quantity;
            }
        });

        document.getElementById("confirm").addEventListener("click", function () {
            alert("Cantidad confirmada: " + quantity);
        });
    </script>
</body>
</html>