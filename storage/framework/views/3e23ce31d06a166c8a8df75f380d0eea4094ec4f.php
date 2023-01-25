<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Qui nous sommes ?</title>
            <!--Bootstrap CSS 5 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            
            <!--CSS link -->
            <link rel="stylesheet" href="css/quiNousSommes.css">

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
                    <li><a class="nav-link scrollto" href="/">Acceuil</a></li>
                    <li><a class="nav-link scrollto  active" href="/quinoussommes">Qui nous sommes ?</a></li>
                    <li><a class="nav-link scrollto" href="/seformer">Se Former</a></li>
                    <li><a class="nav-link scrollto" href="/sinscrire">S'inscrire</a></li>
                    <li><a class="nav-link scrollto" href="/notreequipe">Notre équipe</a></li>
                    <li class="dropdown"><a href="/quinoussommes"><span>Nos services</span> <i class="bi bi-chevron-down"></i></a>
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
         <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <CENTER>
                <h2 style="color:#37517e">QUI SOMMES NOUS ?</h2>
                <hr/>
            </CENTER>
            </div>

            <div class="row content">
            <div class="col-lg-6">
                <p>
                L'ISGI de casablanca est un établissement de la formation
                professionnelle relevant de I'OFPPT spécialisé dans les métiers du Digital
                et de la gestion, administration et commerce. Ses principales activitéssoni:
                </p>
                <ul>
                <li><i class="bi bi-check2-all"></i> Formation initiale en cours du jour et en cours du soir</li>
                <li><i class="bi bi-check2-all"></i> Formation continue en faveur des entreprises</li>
                <li><i class="bi bi-check2-all"></i> Assistance technique dans le cadre de la formation professionnelle</li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                Situé en plein centre du métrople Casablanca, et tenant compte des besoins du marché de l'emploi, et en réponse aux exigences des
                différents secteurs économiques, IISGI concentre son action et ses moyens autour de trois missions stratégiques...
                </p>
                <a href="https://www.ofppt.ma/" class="btn-learn-more" target="_blank">Plus d'info</a>
            </div>
            </div>

        </div>
        </section><!-- End About Us Section -->    
        <!--Bootstrap js 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\MAMP\htdocs\ISGI\resources\views/quiNousSommes.blade.php ENDPATH**/ ?>