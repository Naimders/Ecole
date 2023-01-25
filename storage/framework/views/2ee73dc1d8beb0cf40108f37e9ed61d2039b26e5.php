<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>
            <!--Bootstrap CSS 5 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            
            <!--CSS link -->
            <link rel="stylesheet" href="css/contact.css">

            <!--Vendor Bootstrap icons-->
            <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

            
            <link href="img/logo.bmp" rel="icon" />

    </head>

    <body class="antialiased">
  <header id="header" >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/"> ISGI CASA</a></h1>
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
  </header>
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <CENTER>
            <h2 style="color:#37517e">CONTACT</h2>
            <hr/>
            <p>
                L'envoie des messages permet de renforcer les outils de communication que nous avons mis à disposition de nos stagiaires et entreprises afin de leurs donner un moyen 
                pour échanger plus facilement....
            </p>
        </CENTER>

      </div>

      <div class="row">
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Adresse :</h4>
              <p>26 Rue d'avesnes, Bd Med V Casablanca</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>isgicasa@ofpptma</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telephone:</h4>
              <p>+212 52 77 62 21</p>
            </div>

            <iframe
              src= "https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=isgi%20casablanca%20maroc+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
              frameborder="0"
              style="border: 0; width: 100%; height: 290px"
              allowfullscreen
            ></iframe>
          </div>
        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form
            action="forms/contact.php"
            method="post"
            role="form"
            class="php-email-form"
          >
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Votre nom</label>
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="name"
                  required
                />
              </div>
              <div class="form-group col-md-6">
                <label for="name">Votre Email</label>
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  required
                />
              </div>
            </div>
            <div class="form-group">
              <label for="name">Objet</label>
              <input
                type="text"
                class="form-control"
                name="subject"
                id="subject"
                required
              />
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea
                class="form-control"
                name="message"
                rows="10"
                required
              ></textarea>
            </div>
            <div class="text-center">
              <button type="submit">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
<div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright <strong><span>  ISGI  </span></strong
      >Tous les droits sont réservés
    </div>
    <div class="credits">
       crée par <a href="#" target="_blank">EL KHATABI HAMZA</a>
    </div>
  </div>
</footer>
<!-- End Footer -->

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

    </body>
</html><?php /**PATH C:\MAMP\htdocs\ISGI\resources\views/contact.blade.php ENDPATH**/ ?>