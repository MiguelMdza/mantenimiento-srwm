<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Axl</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

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
        <link href="{{asset('css/restaurante.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"><span>SRWM</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="#" class="nav-item nav-link">Home</a>
                        <a href="comanda" class="nav-item nav-link active">About</a>
                        <a href="mesa" class="nav-item nav-link">Feature</a>
                        <a href="alimento" class="nav-item nav-link">Chef</a>
                        <a href="alimento" class="nav-item nav-link">Menu</a>
                        <a href="booking.html" class="nav-item nav-link">Booking</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
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
                        <h2>Software Restaurant Web Master</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Inicio</a>
                        <a href="">Comandas</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <div class="container mt-2 pt-2">
            <div class="text-center">
                <h1 class="text-dark pt-3">Listado de Comandas</h1>
            </div>

            <div class="text-left">
                <a class="btn custom-btn" href="/comanda/create">Agregar Comanda</a>
            </div>

            <div class="table-responsive mt-1 pt-1">
                <div class="row">
                    <div class="col">
                        <table class="table-responsive-md table-bordered table">
                            <thead class="">
                                <tr class="text-center">
                                    <th scope="col">ID</th>
                                    <th scope="col">Estado Comanda</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Comentarios</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            @foreach ($comandas as $comanda)
                            <tbody>
                                <tr class="text-dark text-center">
                                    <td class="table-dark">
                                        <a href="/comanda/{{ $comanda->id }}">
                                            {{ $comanda->cerradaComanda }}
                                        </a>
                                    </td>
                                    <td>{{ $comanda->totalComanda }}</td>
                        
                                    <td>
                                        <a class="btn btn-woox text-light" href="/comanda/{{ $comanda->id }}/edit">Editar</a>
                                    </td>
                                    <td>
                                        <form class="formulario-eliminar" action="/comanda/{{ $comanda->id }}" method="POST">
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
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
