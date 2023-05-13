<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRWM - Alimentos</title>

    <!-- Favicon -->
    <link href="img/logo_small.png" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/restaurante.css" rel="stylesheet">
</head>
<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="{{ url('/') }}" class="navbar-brand"><span>SRWM</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Inicio</a>
                    <a href="/comanda" class="nav-item nav-link">Comandas</a>
                    <a href="/mesa" class="nav-item nav-link">Mesas</a>
                    <a href="/alimento" class="nav-item nav-link active">Alimentos</a>
                    <a href="/recurso" class="nav-item nav-link">Recursos</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
    
    
    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Menú de Alimentos</h2>
                </div>
                <div class="col-12">
                    <a href="/">Inicio</a>
                    <a href="/alimento">Alimentos</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    <div class="container mt-5 pt-5">
        <div class="text-center">
            <h1 class="text-dark pt-3">Listado de Alimentos</h1>         
        </div>

        <a class="btn custom-btn" href="/alimento/create">Agregar Alimentos</a>

        <div class="table-responsive">
            <div class="row">
                <div class="col">
                    <table class="table-responsive-md table-bordered table">
                        <thead class="">
                            <tr class="text-center">
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        @foreach ($alimentos as $alimento)
                        <tbody>
                            <tr class="text-dark text-center">
                                <td class="table-dark">
                                    {{ $alimento->nombre }}
                                </td>
                                <td>{{ $alimento->precio }}</td>
                                <td>{{ $alimento->tipo }}</td>
                                <td>{{ $alimento->descripcion }}</td>
                                <td>
                                    <a class="btn btn-warning" href="/alimento/{{ $alimento->id }}/edit">Editar</a>
                                </td>
                                <td>
                                    <form class="formulario-eliminar" action="/alimento/{{ $alimento->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-danger" value="Eliminar">
            
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Food Start -->
    <div class="food">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="food-item">
                        <i class="flaticon-burger"></i>
                        <h2>Hamburguesas</h2>
                        <p>
                            Somos famosos por nuestras hamburguesas deliciosas y jugosas, hechas con ingredientes frescos y de alta calidad. 
                        </p>
                        <a href="#">Ver Menu</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <i class="flaticon-snack"></i>
                        <h2>Snacks</h2>
                        <p>
                            Nuestros snacks son perfectos para saciar tu hambre y satisfacer tus antojos. 
                        </p>
                        <a href="#">Ver Menu</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <i class="flaticon-cocktail"></i>
                        <h2>Bebidas</h2>
                        <p>
                            Ofrecemos una gran selección de bebidas, desde refrescos clásicos hasta bebidas alcohólicas de alta calidad. 
                        </p>
                        <a href="#">Ver Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Food End -->
    

    <!-- Menu Start -->
    <div class="menu">
        <div class="container">
            <div class="section-header text-center">
                <p>Menu</p>
                <h2>Delicioso Menu</h2>
            </div>
            <div class="menu-tab">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#burgers">Hamburguesas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#snacks">Snacks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#beverages">Bebidas</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="burgers" class="container tab-pane active">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-burger.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Mini Hamburguesa de Queso</span> <strong>$65.00</strong></h3>
                                        <p>Clásica hamburguesa en una porción más pequeña y práctica.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-burger.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Hamburguesa de Doble Tamaño</span> <strong>$80.00</strong></h3>
                                        <p>Una porción grande de carne con doble queso, servida en un pan grande</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-burger.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Tocino, Huevo y Queso</span> <strong>$95.00</strong></h3>
                                        <p>Es una opción para los que buscan una hamburguesa con un sabor adicional</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-burger.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Hamburguesa de Carne de Puerco</span> <strong>$102.00</strong></h3>
                                        <p>Una opción jugosa, sabrosa y ligeramente diferente a la de ternera.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-burger.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Hamburguesa de Pollo</span> <strong>$117.00</strong></h3>
                                        <p>Opción ligera y saludable con carne aderezada en panecillo suave.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="img/menu-burger-img.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div id="snacks" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-snack.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Maiz Tikki - Aloo Frito</span> <strong>$45.00</strong></h3>
                                        <p>Deliciosos bocados crujientes de maíz y papa frita.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-snack.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Tostadas de Pan Besan</span> <strong>$68.00</strong></h3>
                                        <p>Rebanadas de pan fritas y crujientes, cubiertas con una mezcla de harina.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-snack.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Snacks de Nuggets de Soja</span> <strong>$52.00</strong></h3>
                                        <p>Pequeñas nuggets de soja tostadas y condimentadas.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-snack.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Trozos de Soja Tandoori</span> <strong>$30.00</strong></h3>
                                        <p>Trocitos de soja marinados en una mezcla de especias Tandoori</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="img/menu-snack-img.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div id="beverages" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-beverage.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Copa de Cerveza</span> <strong>$32.00</strong></h3>
                                        <p>Bebida alcohólica elaborada con granos de cebada fermentados y lúpulo.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-beverage.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Café Americano</span> <strong>$22.00</strong></h3>
                                        <p>Perfecto para acompañar un delicioso postre.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-beverage.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Caramel Macchiato</span> <strong>$15.00</strong></h3>
                                        <p>Para aquellos que disfrutan de un café suave con un toque de sabor.</p>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-img">
                                        <img src="img/menu-beverage.jpg" alt="Image">
                                    </div>
                                    <div class="menu-text">
                                        <h3><span>Café Negro Estándar</span> <strong>$12.00</strong></h3>
                                        <p>Perfecta para aquellos que disfrutan del sabor fuerte del café.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="img/menu-beverage-img.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Nuestra Información</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Enrique Segoviano #13, JAL, MEX</p>
                                <p><i class="fa fa-phone-alt"></i>+52 3335681257</p>
                                <p><i class="fa fa-envelope"></i>olympus@gmail.com</p>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Enlaces</h2>
                                <a href="#">Términos y Condiciones</a>
                                <a href="#">Políticas de Privacidad</a>
                                <a href="#">Cookies</a>
                                <a href="#">Ayuda</a>
                                <a href="#">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer-newsletter">
                        <h2>Boletín Informátivo</h2>
                        <p>
                            Si quieres recibir novedades acerca de nuestro restaurante, envíamos tu correo.
                        </p>
                        <div class="form">
                            <input class="form-control" placeholder="El correo va aquí">
                            <button class="btn custom-btn">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Derechos de Autor &copy; <a href="#">SRWM</a>, Todos los Derechos Revervados.</p>
                <p>Diseñado por <a href="#">Olympus </a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>