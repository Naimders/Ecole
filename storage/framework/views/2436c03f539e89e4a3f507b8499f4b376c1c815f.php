<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acceuil</title>
            <!--Bootstrap CSS 5 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            
            <!--CSS link -->
            <link rel="stylesheet" href="css/acceuil.css">

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
            <!--<a href="index.html" class="logo me-auto"><img src="assets/img/logo.bmp" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Acceuil</a></li>
                    <li><a class="nav-link scrollto" href="/quinoussommes">Qui nous sommes ?</a></li>
                    <li><a class="nav-link scrollto" href="/seformer">Se Former</a></li>
                    <li><a class="nav-link scrollto" href="/sinscrire">S'inscrire</a></li>
                    <li><a class="nav-link scrollto" href="/notreequipe">Notre équipe</a></li>
                    <li class="dropdown"><a href="/"><span>Nos services</span> <i class="bi bi-chevron-down"></i></a>
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

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Institut Spécialisé de Gestion et d'Informatique</h1>
                <h2>Nous sommes spécialisées dans la formation professionnelle dans les métiers d'administration, du Marketing et du Digital</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="/quinoussommes" class="btn-get-started scrollto" target="_blank">Commençons</a>
                    <a href="https://www.youtube.com/watch?v=0CRoKXinfhM" class="glightbox btn-watch-video" target="_blank"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
            </div>

        </section><!-- End Hero -->
        
        <!--Bootstrap js 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\MAMP\htdocs\ISGI\resources\views/acceuil.blade.php ENDPATH**/ ?>