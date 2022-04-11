<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/icons/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.style.css">
    <link rel="stylesheet" href="assets/css/footer.style.css">
    <link rel="stylesheet" href="assets/css/formularios.style.css">
    <link rel="stylesheet" href="assets/css/popup.style.css">
    <link rel="stylesheet" href="assets/css//carrito.style.css">
    <title>Upicac | Carrito Compra</title>
    <style>
        /*
        Container
    */
        body div.container {
            background: linear-gradient(rgb(0, 104, 173), rgb(0, 0, 0));
            /* background-position: center; */
            background-repeat: no-repeat;
            /* background-size: cover; */
            background-attachment: fixed;

            /*GRID*/
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr max-content max-content 30vh;
            grid-template-areas:
                'header'
                'main'
                'aside'
                'footer'
            ;

            width: 100%;
            height: max-content;

        }



        main div.banner {
            background: linear-gradient(rgba(0, 0, 0, 0.404), rgba(0, 0, 0, 0)), url(assets/img/back-mobile_7.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;


            display: block;
            width: 100%;
            height: 80vh;
            margin: auto;

        }

        @media (min-width:860px) {
            main div.banner {
                background: linear-gradient(rgba(0, 0, 0, 0.404), rgba(0, 0, 0, 0)), url(assets/img/back-mobile_7.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;


                display: block;
                width: 100%;
                height: 90vh;
                margin: auto;

            }

        }
    </style>
</head>

<body>
    <div class="container">
    <header>
            <nav id="mobile">
                <button id="btnMenu" value="false" onclick="openMenu()"><img src="assets/icons/menu.png" alt=""></button>
                <div id="nav-links">
                    <a href="#" class="btn">Inicio</a>
                    <a href="" class="btn">Empresa</a>
                    <a href="productos.php" class="btn">Servicios</a>
                    <a href="clientes.php" class="btn">Clientes</a>
                    <a href="#" onclick="closeMenu()" class="btn last"><img src="assets/icons/arroy-up.png" alt=""></a>
                </div>
            </nav>
            <nav id="desktop">
                <div id="nav-links-desktop">
                    <a href="#" class="btn">Inicio</a>
                    <a href="" class="btn">Empresa</a>
                    <a href="productos.php" class="btn">Servicios</a>
                    <a href="clientes.php" class="btn">Clientes</a>
                </div>
            </nav>
            <div class="logo">
                <!-- Aquí se centrará y se colocará el loco Upicac.com -->
                <a href="#"><img src="assets/icons/logo.png" alt=""></a>
            </div>
        </header>
        <main>
            <div class="content-carrito">
                <div class="usuario">
                    <div class="position-left">
                        <p>
                            Tu carrito: <span>$variable</span>
                        </p>
                    </div>
                </div>
                <div class="lista">
                    <div class="producto-carrito">
                        <div class="eliminar">
                            <a href="#">X</a>
                        </div>
                        <hr>
                        <div class="producto-name">
                            <p>Producto: <span>Teclado Gaming Razer TR560</span> </p>
                        </div>
                        <hr>
                        <div class="producto-precio">
                            <p>Precio: <span>45 €</span> </p>
                        </div>
                        <hr>
                        <div class="producto-cantidad">
                            <p>Cantidad: <span>1</span> </p>
                        </div>
                        <hr>
                        <div class="subtotal">
                            <p>Subtotal: <span>45 €</span></p>
                        </div>
                    </div>
                    <div class="producto-carrito">
                        <div class="eliminar">
                            <a href="#">X</a>
                        </div>
                        <hr>
                        <div class="producto-name">
                            <p>Producto: <span>Raton Gaming Razer 560</span> </p>
                        </div>
                        <hr>
                        <div class="producto-precio">
                            <p>Precio: <span>35 €</span> </p>
                        </div>
                        <hr>
                        <div class="producto-cantidad">
                            <p>Cantidad: <span>1</span> </p>
                        </div>
                        <hr>
                        <div class="subtotal">
                            <p>Subtotal: <span>35 €</span></p>
                        </div>
                    </div>
                </div>
                <div class="total-carrito">
                    <div class="subtotal">
                        <p>Total: 80 €</p>
                    </div>
                    <hr>
                    <div class="envio">
                        <div class="padding">
                            <p>Forma de envio</p>
                        </div>
                        <form action="">
                            <label>
                                <input type="radio" name="envio" value="gratis" required> Envío Gratis
                            </label>
                            <label>
                                <input type="radio" name="envio" value="cinco" required> Envío a otro municipio 5€
                            </label>
                            <hr>
                            <input type="submit" value="Pagar" name="enviar">
                        </form>
                    </div>
                    <div class="total">

                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer id="footer">
        <div class="footer-content">
            <div class="data">
                <!-- Aquí ira la informacion de la empresa, direccion , nombre...  -->
                <p>
                    <span>Direccion: </span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, enim. <br>
                    <span>Email: </span><a href="mailto:info@upicac.com" class="mail">info@upicac.com</a> <br>
                    <span>Tel: </span>478569321 <br>
                </p>
            </div>
            <div class="contact">
                <!-- Aqui la manera de contactar via web -->
                <p>
                    Ir al apartado de contacto <a href="#" class="oBtn">aquí</a>
                </p>
            </div>
            <div class="politics">
                <!-- Aqui ira las maneras para contactar por otras vias -->
                <div>
                    <a href="">Aviso Legal</a> |
                    <a href="">Política de Cookies</a> |
                    <a href="#private" class="private" onclick="privatePopUpOpen()" id="private">Zona Privada</a>
                </div>
            </div>
        </div>
        <div class="last-footer">
            <a href="#">Upicac 2022</a>
        </div>
    </footer>
    <div class="background-pop">
        <div class="private-popup">
            <div class="close-popup">
                <a href="#footer" onclick="privatePopUpClose()">X</a>
            </div>
            <div class="content-popup">
                <div class="form">
                    <h3 class="c">Admin</h3>
                    <form action="" autocomplete="off">
                        <div>
                            <input type="text" name="user" placeholder="Usuario">
                        </div>
                        <div>
                            <input type="password" name="pass" placeholder="Contraseña">
                        </div>
                        <div>
                            <button type="submit">Iniciar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Js Functions -->
    <script src="Js/Scripts.js"></script>
</body>

</html>