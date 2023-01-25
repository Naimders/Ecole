<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inscription</title>

            <!--Bootstrap CSS 5 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            
            <!--CSS link -->
            <link rel="stylesheet" href="css/sInscrire.css">

            <!--Vendor Bootstrap icons-->
            <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

            
            <link href="img/logo.bmp" rel="icon" />
    </head>
    <body class="antialiased">
        <!-- ======= Header ======= -->
        <header id="header">
            <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/">ISGI CASA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Acceuil</a></li>
                    <li><a class="nav-link scrollto" href="/quinoussommes">Qui nous sommes ?</a></li>
                    <li><a class="nav-link scrollto" href="/seformer">Se Former</a></li>
                    <li><a class="nav-link scrollto  active" href="/sinscrire">S'inscrire</a></li>
                    <li><a class="nav-link scrollto" href="/notreequipe">Notre équipe</a></li>
                    <li class="dropdown"><a href="/sinscrire"><span>Nos services</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Elearning</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="https://altissia.org/fr/ofppt-langues" target="_blank">Les langues</a></li>
                                    <li><a href="https://ofppt.scholarvox.com/" target="_blank">Bibliothèque numérique</a></li>
                                    <li><a href="https://www.ofppt.ma/fr/activites/10" target="_blank">Activités parascolaire</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Activités parascolaire</a></li>
                            <li><a href="#">Communication</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">S'enregistrer</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="/quinoussommes">Commençons</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->  

        <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <CENTER>
            <h2 style="color:#37517e">INSCRIPTION</h2>
            <hr />
            <p>
                Notre offre de formation est ouverte sur plusieurs niveaux et modes (hybride, résidentiel et alterné), en plus du Baccalauréat Professionnel et Parcours collégial
                ainsi qu'une large palette de formations qualifiantes.
            </p>
            </CENTER>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Tous</li>
          <li data-filter=".filter-app">Infra</li>
          <li data-filter=".filter-card">Dev</li>
          <li data-filter=".filter-web">Gestion</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
        
        
        <!--Bootstrap js 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    </body>
</html>
<?php /**PATH C:\MAMP\htdocs\ISGI\resources\views/sInscrire.blade.php ENDPATH**/ ?>