
<?php

session_start();

if(!isset($_SESSION['usuario'])) {
    echo '
    <script> 

    alert("Por favor debes iniciar sesion");
    window.location = "http://localhost/brokies/login.php";

    </script> 
    
    ';
    session_destroy();
    die();
}
 
?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>XSTARBARBER'S</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-barber-shop.css" rel="stylesheet">
<!--

TemplateMo 585 Barber Shop

https://templatemo.com/tm-585-barber-shop

-->
    </head>
    
    <body>

        <div class="container-fluid">
            <div class="row">

                <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                    <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                        <a class="navbar-brand" href="index.html">
                            <img src="images/logo_de_barberioa-removebg-preview.png" class="logo-image img-fluid" align="">
                        </a>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Barberos(info)</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Servicios</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Lista de precios</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">informacion del personal</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_6">Mas informacion</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="http://localhost/XSTARBARBERS/tabla_reserva.php">Reservas</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="cerrar.php">Cerrar</a>
                            </li>

                        </ul>
                    </div>
                </nav>
                
                <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-8 col-12">
                                        <h1 class="text-white mb-lg-3 mb-4"><strong>XSTARBARBER <em>'S</em></strong></h1>
                                        <p class="text-black">Consigue el corte de pelo más profesional para ti</p>
                                        <br>
                                        <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2" href="#section_2">Que somos</a>

                                        <a class="btn custom-btn smoothscroll mb-2" href="#section_3">Que hacemos</a>
                                    </div>
                                </div>
                            </div>

                            
                    </section>


                    <section class="about-section section-padding" id="section_2">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12 mx-auto">
                                    <h2 class="mb-4">Barberos Prefessionales</h2>

                                    <div class="border-bottom pb-3 mb-5">
                                        <p>Ofrecemos el mejor servicios de cada uno de nuestros barberos para complacer a nuestros clientes.</p>
                                    </div>
                                </div>

                                    <h6 class="mb-5">Conoce a los barberos</h6>

                                        <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                                            <img src="images/barber/portrait-male-hairdresser-with-scissors.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">

                                            <div class="team-info d-flex align-items-center flex-wrap">
                                                <p class="mb-0">STIVEN</p>

                                                <ul class="social-icon ms-auto">
                                                    <li class="social-icon-item">
                                                        <a href="https://www.instagram.com/brayanortega_20/" class="social-icon-link bi-instagram"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                                            <img src="images/barber/portrait-mid-adult-bearded-male-barber-with-folded-arms.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">

                                            <div class="team-info d-flex align-items-center flex-wrap">
                                                <p class="mb-0">SANTIAGO</p>

                                                <ul class="social-icon ms-auto">
                                                    <li class="social-icon-item">
                                                    <li class="social-icon-item">
                                                        <a href="https://www.instagram.com/sxbxstiann/" class="social-icon-link bi-instagram">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="featured-section section-padding">
                        <div class="section-overlay"></div>

                        <div class="container">
                            <div class="row">

                                <div class="col-lg-10 col-12 mx-auto">
                                    <h2 class="mb-3">Obtenga 10% de descuento</h2>

                                    <p>Cada segunda semana del mes</p>

                                    <strong>Codigo de promocion: BarBer22</strong>
                                </div>

                            </div>
                        </div>
                    </section>


                    <section class="services-section section-padding" id="section_3">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12">
                                    <h2 class="mb-5">Servicios</h2>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="images/services/woman-cutting-hair-man-salon.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Corte de cabello</h4>

                                            <strong class="services-thumb-price">$15.000</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="images/services/hairdresser-grooming-their-client.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Corte y Lavado</h4>

                                            <strong class="services-thumb-price">$25.000</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                    <div class="services-thumb">
                                        <img src="images/services/hairdresser-grooming-client.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Solo barba</h4>

                                            <strong class="services-thumb-price">$10.000</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <img src="images/services/boy-getting-haircut-salon-front-view.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Corte de niño</h4>

                                            <strong class="services-thumb-price">$10.000</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                       </section>

                    <section class="price-list-section section-padding" id="section_4">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-8 col-12">
                                    <div class="price-list-thumb-wrap">
                                        <div class="mb-4">
                                            <h2 class="mb-2">Lista de precios</h2>

                                            <strong>variedade de precios</strong>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Corte de Cabello
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>$15.000</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Solo barba
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>$10.000</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Cerquillos
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>$5.000</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                                Corte y Lavado
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>$25.000</strong>
                                            </h6>
                                        </div>

                                        <div class="price-list-thumb">
                                            <h6 class="d-flex">
                                               Tinte
                                                <span class="price-list-thumb-divider"></span>

                                                <strong>$35.000</strong>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                                    <img src="images/vintage-chair-barbershop.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="services-section section-padding" id="section_5">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12">
                                    <h2 class="mb-5">Informacio de la barberia</h2>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="images/services/administrador.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <a href="administrador.html"><h4 class="mb-0">Administrador</h4></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="images/services/trabajadores.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                           <a href="barberos.php"><h4 class="mb-0">Barberos</h4></a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                       </section>

                <section class="contact-section" id="section_6">
                    <div class="section-padding section-bg">
                        <div class="container">
                            <div class="row">   

                                <div class="col-lg-8 col-12 mx-auto">
                                    <h2 class="text-center"> XSTARBARBER'S</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-padding">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <h5 class="mb-3"><strong>Mas</strong> Informacion</h5>

                                    <p class="text-white d-flex mb-1">
                                        <a href="cel: 3023695970" class="site-footer-link">
                                            (+57) 
                                            3023695970
                                        </a>
                                    </p>

                                    <p class="text-white d-flex">
                                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                            ramosberrrr@gmail.com
                                        </a>
                                    </p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="https://www.instagram.com/bryanbarbershopmonteria/" class="social-icon-link bi-instagram">
                                            </a>
                                        </li>
            
                                        <li class="social-icon-item">
                                            <a href="https://wa.link/lhg08q" class="social-icon-link bi-whatsapp">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-5 col-12 contact-block-wrap mt-5 mt-lg-0 pt-4 pt-lg-0 mx-auto">
                                    <div class="contact-block">
                                        <h6 class="mb-0">
                                            <i class="custom-icon bi-shop me-3"></i>

                                            <strong>Atencion</strong>

                                            <span class="ms-auto">9:00 AM - 8:00 PM</span>
                                        </h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <footer class="site-footer">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <h4 class="site-footer-title mb-4">Siempre a la orden</h4>
                            </div>

                            
                            </div>
                        </div>
                    </div>

                    <div class="site-footer-bottom">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-8 col-12 mt-4">
                                    <p>.n.n.n.n.n.n.n.n.......................... stiven ramos -- santiago casalla -- said marin</p>
                                </div>

                                <div class="col-lg-2 col-md-3 col-3 mt-lg-4 ms-auto">
                                    <a href="#section_1" class="back-top-icon smoothscroll" title="Back Top">
                                        <i class="bi-arrow-up-circle"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>