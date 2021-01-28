<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!--Datos de la pagina web-->
  <title>Pixel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--Estilos, iconos,etc...-->
  <!-- Favicons -->
  <link href="/img/logo.png" rel="icon">
  <link href="/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/owl.carousel//owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.0
  * URL: pixel.instel.site
  * Author: Pixel
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!--h1 class="logo mr-auto"><a href="index.html">Arsha</a></h1-->
      <!-- Uncomment below if you prefer to use an image logo -->
     
      <a href="index.html" class="logo mr-auto"><img src="{{asset('/img/logo_pixel.png')}}" alt="" class="img-fluid" width="125"></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul class="lista">
          <li class="active"><a href="index.html">Inicio</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Portafolio</a></li>
          <li><a href="#contact">Productos</a></li>
          <li><a href="#contact">Precios</a></li>
          <li><a href="#contact">Contactanos</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header --> 

  <!-- ======= Description Section ======= -->
  <section id="hero" class="d-flex align-items-center">
  
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200"><br><br>
          <br>
          <h1>IPTV / OTT MIDDLEWARE</h1>
          <h2>An affordable, feature-rich solution for Pay TV Operators</h2>
          <ul style="color: white;">
            <li>MIDDLEWARE</li>
            <ol> Ligera y escalable sin limitaciones.</ol>
            <li>APPLICATION PLAYER </li>
            <ol>Reproductor avanzado para cualquier tamaño de pantalla.</ol>

          </ul>
          <!-- img logo de pixel -->
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="{{asset('/videos/video_logo.mp4')}}" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
        
     
    </div><br><br>

  </section><!-- End Hero -->

  <main id="main">

    <!-- =======  Clients Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <!--img src="/img/clients/client-1.png" class="img-fluid" alt=""-->
             <img src="{{asset('/img/logos/roku-logo.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <!--img src="/img/clients/client-2.png" class="img-fluid" alt=""-->
            <img src="{{asset('/img/logos/Fire_TV.png')}}" class="img-fluid" alt="">
            
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <!--img src="/img/clients/client-3.png" class="img-fluid" alt=""-->
            <img src="{{asset('/img/logos/LG-WebOS-Logo.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <!--img src="/img/clients/client-4.png" class="img-fluid" alt=""-->
            <img src="{{asset('/img/logos/Android-TV.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <!--img src="/img/clients/client-5.png" class="img-fluid" alt=""-->
            <img src="{{asset('/img/logos/tizen_logo.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <!--img src="/img/clients/client-6.png" class="img-fluid" alt=""-->
            <img src="{{asset('/img/logos/android.png')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>¿Quienes somos?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              No somos solo otro proveedor de tecnología, Pixel crea negocios OTT prósperos, creamos servicios de transmisión de video a pedido y TV lineal en vivo que son probados, rentables y escalables.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Accesibles</li>
              <li><i class="ri-check-double-line"></i> Sin licencia</li>
              <li><i class="ri-check-double-line"></i> Adaptable a tus necesidades</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Pixel lleva OTT al siguiente nivel al traer las últimas tecnologías en la nube. <br><br>
 
              Reduzca los costos de procesamiento y CDN mientras maximiza la calidad de la experiencia con nuestro Player liviano y aceptado por la mayor cantidad de dispositivos.<br><br>
               
              Nuestros servicios ligeros e impulsados por un soporte hacen que la entrega de contenido se centre en el usuario y la red. Ahora puede remodelar sin problemas su flujo de trabajo en vivo según la dinámica de su usuario; descargar su procesamiento a cualquier nube; mover funciones de la cabecera al borde de la red; adapte dinámicamente su escala de interpretación a las capacidades de la última milla; y mucho más.
              
            </p>
           
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3> <strong>¿Para quién?</strong></h3>
              <p>
                Una plataforma flexible para todos los proveedores de contenido - Startups - Operadores móviles - ISP - Operadores de cable - Hostelería - Corporativo - Gobiernos.

              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Pataforma abierta <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Una plataforma abierta ligera que se ejecuta en cualquier sistema operativo.

                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span>Jugador avanzado<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Una aplicación intuitiva y rica en funciones para cada pantalla.

                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Se integra con miles<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      Conéctese a miles de aplicaciones a través de nuestras API y la aplicación Zapier.

                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset('/img/why-us.png')}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>IPTV/OTT Para operadores de CATV tradicionales.
            Llega a tu público y entrega tu contenido a cualquier dispositivo, en cualquier parte, con una inversión mínima, en su cabecera actualice su inversión con un servicio IPTV/OTT con una velocidad y calidad superiores, podemos ofrecer a sus clientes la excepcional experiencia de usuario que necesita. Podemos ayudarle a expandir fácilmente y proteger su contenido.
            </p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Personalización</a></h4>
              <p>Adaptamos nuestra solución para que sea única y alineada con su modelo de negocio.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Hosting</a></h4>
              <p>Pague a medida que crece con nuestra solución de alojamiento en Google Cloud con precios transparentes.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">CDN </a></h4>
              <p>Los mejores CDN y los precios más bajos cuando se combinan con nuestra plataforma. Pague lo que consuma sin compromiso.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Soporte continuo </a></h4>
              <p>Ofrecemos soporte continuo junto con el desarrollo de nuevas funciones y la corrección de errores. Estén atentos y actualizados con nosotros.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Pixel</h3>
            <p> Con nuestra solución flexible de extremo a extremo, puede dirigirse directamente al consumidor con un servicio OTT profesional que se adapta completamente a su marca. Lo ayudaremos a lanzarse a los mercados globales, crear una audiencia leal y monetizar con éxito sus eventos en vivo, canales lineales y contenido VOD. Nuestros servicios de video profesionales son seguros, escalables y están disponibles en múltiples dispositivos. Y nuestras capacidades integrales significan que podemos encargarnos de todas las cosas importantes para que usted pueda concentrarse en el contenido.
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Desarrollamos productos adaptados a la necesidad de la industria donde el contenido se puede reproducir en la mayor cantidad de dispositivos o pantallas.
          </p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">PWA</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{asset('/img/portfolio/portfolio-1.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('/img/portfolio/portfolio-2.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{('/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="{{('/img/portfolio/portfolio-3.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="{{asset('/img/portfolio/portfolio-4.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="{{asset('/img/portfolio/portfolio-5.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="{{asset('/img/portfolio/portfolio-6.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="{{asset('/img/portfolio/portfolio-7.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="{{asset('/img/portfolio/portfolio-8.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('/img/portfolio/portfolio-9.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactanos</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Ubicación:</h4>
                <p>San Salvador</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Correo:</h4>
                <p>info@instel.site</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telefono:</h4>
                <p>503-60031009</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nombre</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Correo electronico</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Asunto</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Mensaje</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/js/main.js')}}"></script>

</body>

</html>