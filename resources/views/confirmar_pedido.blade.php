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
    </div>
    <div class="cuerpo">
        <div>
            <p style="margin-top: 15px">Detalle de tu pedido.</p>
        </div>
        <div class="detalle-pedido">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="tarjeta-detalle-carrito">
                                <img src="{{ asset('img/img-producto.png') }}" alt="Logo" style="width: 50px; height: 50px;">
                                <div class="d-flex flex-column">
                                    <div>
                                        <p>Nombre_Producto</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>00.00 Lps</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <button class="btn" id="decrease"
                                        style="background-color: #e23636; color: #fff;">-</button>
                                    <span id="quantity" class="fs-4">1</span>
                                    <button class="btn" id="increase"
                                        style=" background-color: #009a9a; color: #fff;">+</button>
                                </div>
                            </div>
                        </td>
                        <td>00.00 Lps.</td>
                        <td class="action-buttons">
                            <a href="" class="boton-eliminar"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="tarjeta-detalle-carrito">
                                <img src="{{ asset('img/img-producto.png') }}" alt="Logo" style="width: 50px; height: 50px;">
                                <div class="d-flex flex-column">
                                    <div>
                                        <p>Nombre_Producto</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>00.00 Lps</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <button class="btn" id="decrease"
                                        style="background-color: #e23636; color: #fff;">-</button>
                                    <span id="quantity" class="fs-4">1</span>
                                    <button class="btn" id="increase"
                                        style=" background-color: #009a9a; color: #fff;">+</button>
                                </div>
                            </div>
                        </td>
                        <td>00.00 Lps.</td>
                        <td class="action-buttons">
                            <a href="" class="boton-eliminar"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="tarjeta-detalle-carrito">
                                <img src="{{ asset('img/img-producto.png') }}" alt="Logo" style="width: 50px; height: 50px;">
                                <div class="d-flex flex-column">
                                    <div>
                                        <p>Nombre_Producto</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>00.00 Lps</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <button class="btn" id="decrease"
                                        style="background-color: #e23636; color: #fff;">-</button>
                                    <span id="quantity" class="fs-4">1</span>
                                    <button class="btn" id="increase"
                                        style=" background-color: #009a9a; color: #fff;">+</button>
                                </div>
                            </div>
                        </td>
                        <td>00.00 Lps.</td>
                        <td class="action-buttons">
                            <a href="" class="boton-eliminar"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="tarjeta-detalle-carrito">
                                <img src="{{ asset('img/img-producto.png') }}" alt="Logo" style="width: 50px; height: 50px;">
                                <div class="d-flex flex-column">
                                    <div>
                                        <p>Nombre_Producto</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>00.00 Lps</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <button class="btn" id="decrease"
                                        style="background-color: #e23636; color: #fff;">-</button>
                                    <span id="quantity" class="fs-4">1</span>
                                    <button class="btn" id="increase"
                                        style=" background-color: #009a9a; color: #fff;">+</button>
                                </div>
                            </div>
                        </td>
                        <td>00.00 Lps.</td>
                        <td class="action-buttons">
                            <a href="" class="boton-eliminar"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <div class="tarjeta-detalle-pedido">
                    <h6>Total a pagar</h6>
                    <div style="display:grid; grid-template-columns: 2fr 1fr">
                        <p>Subtotal</p>
                        <p>00.00 Lps</p>
                    </div>
                    <div style="display:grid; grid-template-columns: 2fr 1fr">
                        <p>Costo envío</p>
                        <p>00.00 Lps</p>
                    </div>
                    <div style="display:grid; grid-template-columns: 2fr 1fr">
                        <p><b>Total</b></p>
                        <p>00.00 Lps</p>
                    </div>
                    <div>
                        <a href="{{ route('carrito') }}" class="boton-registro" style="width: 220px">Finalizar compra</a>
                    </div>
                </div>
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