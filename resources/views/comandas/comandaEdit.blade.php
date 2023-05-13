<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SRWM - Editar Comanda</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

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
        <link href="{{asset('css/restaurante.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="{{ url('/')}}" class="navbar-brand"><span>SRWM</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{ url('/')}}" class="nav-item nav-link">Inicio</a>
                        <a href="/comanda" class="nav-item nav-link active">Comandas</a>
                        <a href="/mesa" class="nav-item nav-link">Mesas</a>
                        <a href="/alimento" class="nav-item nav-link">Alimentos</a>
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

        <!-- Feature Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>MODIFICA LA INFORMACIÓN DE TU COMANDA</p>
                                <h2>¡Este proceso es importante para evitar malentendidos!</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <h3>LA MEJOR COMIDA DE LA CIUDAD</h3>
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="/comanda/{{ $comanda->id }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="control-group">
                                    <div class="input-group">
                                        <select name="mesas_id[]" value="{{ old('mesa_id') }}" id="user_id" class="form-control form-control-lg" multiple>
                                            <option selected disabled>Mesa que se atiende</option>
                                             @foreach($mesas as $mesa)
                                                <option value="{{ $mesa->id }}"  {{ array_search($mesa->id, $comanda->mesas->pluck('id')->toArray()) !== false ? 'selected' : '' }}>
                                                    {{ $mesa->id }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="input-group">
                                        <select name="alimentos_id[]" value="{{ old('alimento_id') }}" id="user_id" class="form-control form-control-lg" multiple>
                                            <option selected disabled>Alimentos requeridos</option>
                                            @foreach($alimentos as $alimento)
                                                <option value="{{ $alimento->id }}"  {{ array_search($alimento->id, $comanda->alimentos->pluck('id')->toArray()) !== false ? 'selected' : '' }}>
                                                    {{ $alimento->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 

                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="integer" name="total" id="total" class="form-control" placeholder="Total" value="{{ $comanda->total }}" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" name="comentarios" class="form-control" placeholder="Comentarios" value="{{ $comanda->comentarios }}" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn custom-btn" type="submit">Actualizar</button>
                                </div>
                            </form>
                        </div>
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
