<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Creative - Start Bootstrap Theme</title>

  
    <!-- <link rel="stylesheet" type="text/css" href="../css/index.css"/> -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap4.0.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/layout3.0.css"/>
    <link rel="stylesheet" type="text/css" href="../package/fontawesome/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="../css/toastr.min.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="../css/index.css"/> -->

  <!-- Font Awesome Icons -->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <!-- <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet"> -->

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="../css/creative.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger title-logo" style="font-family: BwSeidoRoundDEMO-Medium;" href="#page-top"><img class="img-logo" src="../img/logo-branco-sem-fundo.png" alt=""> consultou</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" onclick="butNavResponsive()">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="title-home font-weight-bold">Valorize sua vida</h1>
          <h1 class="title-home font-weight-bold">e seu tempo</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Encontre todos os tipos de profissionais da saúde que você precisa da forma mais rápida 
            que você já viu. Marque consultas e usufrua de ferramentas incríveis que estão disponíveis na nossa plataforma.
          </p>
          
          <div class="home-search-div">
                <div class="row">
                  <div class="home-search-text col-lg-3">
                    <input type="text" name="search" placeholder="Categoria" style="width: 100%;" class="home-search-border-left">
                    <i class="far fa-address-book home-icon-location"></i>
                  </div>
                  <div class="home-search-text col-lg-3">
                      <input type="text" name="location" placeholder="Localização" id="location" style="width: 100%;" class="home-search-border-left">
                      <i class="fa fa-crosshairs home-icon-location"></i>
                  </div>
                  <div class="home-search-text col-lg-3">
                      <input type="text" name="location" placeholder="Convênio" id="conv" style="width: 100%;" class="home-search-border-left">
                      <i class="fas fa-id-card home-icon-location"></i>
                  </div>
                  <div class="home-search-text col-lg-3">
                    <button type="submit" class="btn home-button-search"><i class="fas fa-search"></i> Pesquisar </button>
                  </div>
            </div>

        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0" id="teste">Weve got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Serviço -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Nossos Serviços</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <!-- <i class="fas fa-4x fa-gem text-primary mb-4"></i> -->
            <i class="far fa-4x fa-list-alt text-primary mb-4"></i>
            <h3 class="h4 mb-2">Histórico e avaliação</h3>
            <p class="text-muted mb-0">Todas as suas consultas e avaliações 
              ficarão no seu histório
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <!-- <i class="fas fa-4x fa-laptop text-primary mb-4"></i> -->
            <i class="far fa-4x fa-calendar-alt text-primary mb-4"></i>
            <h3 class="h4 mb-2">Horários e Data</h3>
            <p class="text-muted mb-0">Você pode verificar a disponibilidade dos profissionais a qualquer hora.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <!-- <i class="fas fa-4x fa-globe text-primary mb-4"></i> -->
            <i class="fas fa-4x fa-bell text-primary mb-4"></i>
            <h3 class="h4 mb-2">Receba Notificações</h3>
            <p class="text-muted mb-0">Você será avisado antes de suas consultas para nunca mais esquece-las.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Made with Love</h3>
            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="../img/portfolio/fullsize/1.jpg">
            <img class="home-image-cat" src="../img/dentista.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Categoria
              </div>
              <div class="project-name">
                Dentista
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="../img/portfolio/fullsize/2.jpg">
            <img class="home-image-cat" src="../img/dermatologista.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Categoria
              </div>
              <div class="project-name">
                Dermatologista
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="../img/portfolio/fullsize/3.jpg">
            <img class="home-image-cat" src="../img/enfermeiro.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Categoria
              </div>
              <div class="project-name">
                Enfermeiro
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="../img/portfolio/fullsize/4.jpg">
            <img class="home-image-cat" src="../img/fisioterapeuta.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Categoria
              </div>
              <div class="project-name">
                Fisioterapeuta
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="../img/portfolio/fullsize/5.jpg">
            <img class="home-image-cat" src="../img/neurologista.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Categoria
              </div>
              <div class="project-name">
                Neurologista
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="../img/portfolio/fullsize/6.jpg">
            <img class="home-image-cat" src="../img/psicologo.jpg" alt="">
            <div class="portfolio-box-caption p-3" style="opacity: 1;">
              <div class="project-category text-white-50">
                Categoria
              </div>
              <div class="project-name">
                + Ver Mais
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="page-section-2 bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">Baixe grátis nas principais plataformas</h2>
      <!-- <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a> -->
      <img class="" style="height: 89px;" src="../img/disponivelGooglePlay.png" alt="">
      <img class="" style="height: 67px;" src="../img/disponivelAppStore.png" alt="">
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (202) 555-0149</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:consultou@gmail.com">consultou@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Consultou</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Plugin JavaScript -->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script> -->

  <!-- Custom scripts for this template -->
  

    <script type="text/javascript" src="../js/jquery.min.js"></script>	
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/toastr.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap4.0.min.js"></script>
    <script src="../js/creative.js"></script>

    <script>
      /* SCRIPT JQUERY PARA SUMIR AO ROLAR BARRA DE ROLAGEM  */
      $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#mainNav').css("background-color", "rgba(57, 136, 96, 0.79)")
            } else {
                $('#mainNav').css("background-color", "transparent")
                if($(this).scrollTop() > 300) {
                  $('#teste').css("background-color", "rgba(57, 136, 96, 0.79)")
                }
            }
        });

      $('a.js-scroll-trigger[href*="#"]:not([href="#"])').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
            targetOffset = $(id).offset().top;
            
        $('html, body').animate({ 
        scrollTop: targetOffset - 100
        }, 500);
      });

      function butNavResponsive() {
        var nav = document.getElementById("navbarResponsive").style.display;
        if(nav == "block") {
          document.getElementById("navbarResponsive").style.display = "none";
        } else {
          document.getElementById("navbarResponsive").style.display = "block";
        }
        
      }
    </script>

</body>

</html>