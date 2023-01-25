<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Se Former</title>

            <!--Bootstrap CSS 5 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            
            <!--CSS link -->
            <link rel="stylesheet" href="css/seFormer.css">

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
                    <li><a class="nav-link scrollto  active" href="/seformer">Se Former</a></li>
                    <li><a class="nav-link scrollto" href="/sinscrire">S'inscrire</a></li>
                    <li><a class="nav-link scrollto" href="/notreequipe">Notre équipe</a></li>
                    <li class="dropdown"><a href="/seformer"><span>Nos services</span> <i class="bi bi-chevron-down"></i></a>
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
         <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <CENTER>
            <h2 style="color:#37517e">OFFRE DE FORMATION</h2>
            <hr/>
            <p>
            L’OFPPT a développé au cours de la dernière décennie une coopération fructueuse avec de nombreux pays. Une politique volontariste qui s’est concrétisée par des projets allant de missions d’assistance technique, la formation, jusqu’à l’amélioration des compétences des formateurs.
            </p>
          </CENTER>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-globe"></i></div>
              <h4><a href="https://www.myway.ac.ma/ofppt/fr/FILI%C3%88RES/Digital-et-Intelligence-Artificielle/D%C3%A9veloppement-Digital/p/DIA_DEV_TS" target="_blank">Digital Développeur</a></h4>
              <p>Le Digital developpeur est une
                branche de formation
                diplomante qui forme des
                techniciens spécialisés dans le
                développement full-stack ou le
                développemen mobile</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-file-earmark-bar-graph"></i></div>
              <h4><a href="https://www.myway.ac.ma/ofppt/fr/FILI%C3%88RES/Digital-et-Intelligence-Artificielle/Infrastructure-Digitale/p/DIA_ID_TS" target="_blank">Infrastructure Digital</a></h4>
              <p>Cette branche de formation permet aux jeunes lauréats de ...</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-video2"></i></div>
              <h4><a href="https://www.myway.ac.ma/ofppt/fr/FILI%C3%88RES/Gestion-et-Commerce/Gestion-des-Entreprises/p/GC_GEOCM_TS" target="_blank">Commerce</a></h4>
              <p>Le Technicien spécialisé en
                essources humaines est ...</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-journal"></i></div>
              <h4><a href="https://www.myway.ac.ma/ofppt/fr/FILI%C3%88RES/Gestion-et-Commerce/Gestion-des-Entreprises/p/GC_GE_TS" target="_blank">Gestion des entreprises</a></h4>
              <p>La filière gestion Ges
                entreprises est une spécialité
                qui permet aux lauréats de ...</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section --> 

        <!--Bootstrap js 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\MAMP\htdocs\ISGI\resources\views/seFormer.blade.php ENDPATH**/ ?>