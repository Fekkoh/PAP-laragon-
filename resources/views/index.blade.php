<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Projeto Favor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v4.7.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Projeto Favor</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="scrollto active" href="index.html">Home</a></li>
          <li><a class="scrollto" href="about.html">Sobre nós</a></li>
          <li class="dropdown"><a href="#"><img width="30" src="assets/img/globe.png" alt="globe.png"></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.html"><img width="30" height="20" src="assets/img/bandeiras/pt.png" alt="PT">Português </a></li>
              <!-- <li><a href="en/index.html"><img width="30" height="20" src="assets/img/bandeiras/uk.png" alt="UK">English </a></li> -->
            </ul>
          </li>
          <li class="dropdown"><a href="#"><img width="30" src="assets/img/user.png" alt="user.png"> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="scrollto" href="login.html">Login</a></li>
              <li><a class="scrollto" href="register.html">Registar-se</a></li>
            </ul>
        </li>
        <li><a class="scrollto" href="search.html"><img width="30" src="assets/img/search.png" alt="search.png"></a></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bem-vindo ao <span>Projeto Favor</span></h2>
          <p class="animate__animated animate__fadeInUp">O Projeto Favor é o site ideal caso precise de ajuda ou simplesmente quer ajudar alguém</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler mais</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Contribuir para um favor</h2>
          <p class="animate__animated animate__fadeInUp">"Uma mão lava a outra" é a melhor maneira para descrever este site. Logo caso queria um favor primeiro precisa de fazer um favor a alguém.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Contribuir</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Pedir um favor </h2>
          <p class="animate__animated animate__fadeInUp">Caso precise de um favor basta clicar no botão a baixo</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pedir</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
     <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Sobre nós</h2>
          <p>Quem nós somos</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <ul>
              <li><i class="ri-check-double-line"></i> </li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>


        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Perguntas frequentes</p>
        </div>

        <ul class="faq-list">
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Como posso ganhar pontos? <i class="bi bi-chevron-down icon-show"></i>
              <i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Quando cria a sua conta automaticamente ganha 1 ponto, para obter mais pontos é necessário ajudar outras pessoas e quando o favor estiver acabado o utilizador que ajudou irá confirmar que o ajudou e assim recebe 1 ponto.   
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Como posso ajudar outras pessoas? <i class="bi bi-chevron-down icon-show"></i><i
                class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Para ajudar outras pessoas basta continuar para baixo.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Quantos pontos tenho? <i class="bi bi-chevron-down icon-show"></i><i
                class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Para saber a quantidade de pontos que tem basta abrir o seu <a href="">perfil</a>.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section> <!-- End F.A.Q Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Selecao</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>