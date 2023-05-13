<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SRWM - Inicio</title>
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
                        <a href="{{ url('/') }}" class="nav-item nav-link active">Inicio</a>
                        <a href="/comanda" class="nav-item nav-link">Comandas</a>
                        <a href="/mesa" class="nav-item nav-link">Mesas</a>
                        <a href="/alimento" class="nav-item nav-link">Alimentos</a>
                        <a href="/recurso" class="nav-item nav-link">Recursos</a>
                        <!-- <a href="team.html" class="nav-item nav-link">Chef</a> -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Mejor <span>Calidad</span> en Ingredientes</h1>
                            <p>
                                Nos enorgullecemos de utilizar solo ingredientes de la más alta calidad, que son cuidadosamente seleccionados de los proveedores más confiables y frescos.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="#">Ver Menu</a>
                                <a class="btn custom-btn" href="#">Reservar una mesa</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>El Mejor <span>Chef</span> del Mundo</h1>
                            <p>
                                Somos un lugar de referencia para los amantes de la alta gastronomía y estamos orgullosos de contar con el mejor chef del mundo en nuestra cocina. Con más de 20 años de experiencia y múltiples premios internacionales, nuestro chef se ha ganado un lugar destacado en el mundo culinario gracias a su creatividad, innovación y excelencia en cada plato.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="#">Ver Menu</a>
                                <a class="btn custom-btn" href="#">Reservar una mesa</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Entrega <span>Rápida</span></h1>
                            <p>
                                En nuestro restaurante nos preocupamos por la rapidez y eficiencia en la entrega de tus alimentos, por lo que nuestro equipo está altamente capacitado para garantizar que tus platos lleguen a tiempo y en perfectas condiciones.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="#">Ver Menu</a>
                                <a class="btn custom-btn" href="#">Reservar una mesa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>Acerca de nosotros</p>
                                <h2>Cocinando desde 1990</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    ¡Bienvenidos a nuestro restaurante! Desde 1990, hemos estado sirviendo los platos más deliciosos y auténticos de la cocina local e internacional. Durante más de 30 años, nuestro restaurante ha sido un punto de referencia para los amantes de la buena comida y la excelencia en el servicio al cliente.
                                </p>
                                <p>
                                    En nuestro menú encontrarás una amplia variedad de opciones, desde platos tradicionales hasta opciones innovadoras y modernas, todo preparado con ingredientes frescos y de alta calidad. Nuestro chef y su equipo de cocineros altamente capacitados se esmeran cada día para ofrecerte la mejor calidad en cada plato que sirven.
                                </p>
                                <a class="btn custom-btn" href="#">Reserva una mesa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->


        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-header">
                            <p>¿Por qué elegirno?</p>
                            <h2>Nuestras características</h2>
                        </div>
                        <div class="feature-text">
                            <div class="feature-img">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="img/feature-1.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-2.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-3.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-4.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <p>
                                En nuestro menú encontrarás una selección única de platos, cada uno cuidadosamente elaborado con ingredientes de la más alta calidad y técnicas culinarias de vanguardia. Desde nuestras entradas hasta nuestros postres, cada plato es una obra maestra de la cocina moderna, que combina sabores y texturas de manera sorprendente.
                            </p>
                            <a class="btn custom-btn" href="#">Reserva una mesa</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-cooking"></i>
                                    <h3>El Mejor Chef del Mundo</h3>
                                    <p>
                                        No solo contamos con el mejor chef del mundo, sino también con un equipo de profesionales apasionados por la cocina y el servicio al cliente.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-vegetable"></i>
                                    <h3>Ingredientes Naturales</h3>
                                    <p>
                                        Nos enfocamos en utilizar ingredientes frescos y naturales en su estado más puro, sin aditivos ni conservantes artificiales.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-medal"></i>
                                    <h3>Productos de la Mejor Calidad</h3>
                                    <p>
                                        Utilizamos solo carnes de animales criados de manera responsable, y frutas y verduras recién cosechadas.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-meat"></i>
                                    <h3>Carne y Vegetales Frescos</h3>
                                    <p>
                                        Nos enorgullece ofrecer una experiencia culinaria única, donde la frescura y la calidad de nuestros ingredientes son una prioridad para nosotros. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-courier"></i>
                                    <h3>Entrega rápida a su puerta</h3>
                                    <p>
                                        Nos preocupamos por la rapidez y eficiencia en la entrega de tus alimentos, por lo que nuestro equipo está altamente capacitado para garantizar que tus platos lleguen a tiempo y en perfectas condiciones.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-fruits-and-vegetables"></i>
                                    <h3>Bajo en grasas</h3>
                                    <p>
                                        En nuestro menú encontrarás opciones bajas en grasas, pero con una gran variedad de sabores y texturas, desde ensaladas frescas hasta platos principales deliciosos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


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


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Nuestro Equipo</p>
                    <h2>Nuestros Masters Chef</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Image">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Rodrigo Torres</h2>
                                <p>CEO, Co Fundador</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Image">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Daniel Vargas</h2>
                                <p>Master Chef</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Image">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Javier Mendoza</h2>
                                <p>Master Chef</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Image">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>Sebastián Gutiérrez</h2>
                                <p>Master Chef</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <p>
                            "Excelente sabor en las hamburguesas, definitivamente volvería."
                        </p>
                        <h2>Luisa Fernanda García</h2>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Image">
                        </div>
                        <p>
                            "Buenas opciones vegetarianas y ambiente acogedor."
                        </p>
                        <h2>Juan Carlos Rodríguez</h2>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="Image">
                        </div>
                        <p>
                            "La hamburguesa con queso y tocino estaba deliciosa."
                        </p>
                        <h2>Daniela Martínez Castaño</h2>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="Image">
                        </div>
                        <p>
                            "Personalicé mi hamburguesa y quedó perfecta, buen servicio y precio razonable."
                        </p>
                        <h2>Santiago Torres Gómez</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Contáctanos</p>
                    <h2>Contacta para obtener más información</h2>
                </div>
                <div class="row align-items-center contact-information">
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Dirección</h3>
                                <p>Enrique Segoviano #13, JAL, MEX</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Teléfono</h3>
                                <p>+52 3335681257</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Correo</h3>
                                <p>olympus@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-share"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Síguenos</h3>
                                <div class="contact-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact-form">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1600663868074!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Nombre" required="required" data-validation-required-message="Por favor ingresa tu nombre" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Correo" required="required" data-validation-required-message="Por favor ingresa tu correo" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Motivo" required="required" data-validation-required-message="Por favor ingresa un motivo" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Por favor ingresa tu mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Blog de Comida</p>
                    <h2>Lo Último del Blog de Comida</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Lo Mejor del Mundo</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Diego</p>
                                    <p><i class="far fa-list-alt"></i>Comida</p>
                                    <p><i class="far fa-calendar-alt"></i>05-May-2023</p>
                                    <p><i class="far fa-comments"></i>15</p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Comer en su restaurante es lo mejor que me ha pasado en el mundo, y quién piense diferente, debería darse una vuelta por ahí.
                                    </p>
                                    <a class="btn custom-btn" href="#">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">Siempre Me Pido Uno</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Sofia</p>
                                    <p><i class="far fa-list-alt"></i>Bebidas</p>
                                    <p><i class="far fa-calendar-alt"></i>03-April-2023</p>
                                    <p><i class="far fa-comments"></i>7</p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Cada que los visito me pido una de sus mejores bebidas, ya hasta los meseros saben a lo que voy. Es de lo más fantástico en este mundo mundial.
                                    </p>
                                    <a class="btn custom-btn" href="#">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


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
                    <p>Diseñado por <a href="#">Olympus</a></p>
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
