<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashbord Espace-eleve</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/demo.css" rel="stylesheet">
  <link rel="stylesheet" href="css/inscription-admin.css">
</head>

<body>

   <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
   <div class="container">
  
   <div class="d-flex justify-content-between align-items-center">
      <h2></h2>
         <ol>
           <li><a href=" {{route('superadmin.home')}}">Accueil</a></li>
           <li>Mes Notes</li>
        </ol>
       </div>
  
     </div>
   </section><!-- End Breadcrumbs -->
    <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <h1 class="text-center text-danger mt-3">Tableau de bord</h1>
        <img src="/images/photo.png" alt="" class="img-fluid rounded-circle">
        <h5 class="text-light text-center"><a href="{{route('superadmin.home')}}">OUEDRAOGO Moussa </a></h5>
        <h6 class="text-center">6ème A</h6>
        <div class="social-links mt-3 text-center">
          <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
        </div>
      </div>
      

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="/"><i class="bx bx-home"></i>Accueil</a></li>
          <li>
              <div class="dropdown">
                  <a  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-user"></i> Ajouter 
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown" href="{{route('ajoutprof')}}">Mes notes</a>
                    <a class="dropdown" href="#">Générer mon bulletin</a>
                    <a class="dropdown" href="#">Mes notifications</a>
                  </div>
              </div>
              </a>
           </li> 
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
          <li>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
            <a class="dropdown" href="{{route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i>{{ __('Déconnexion') }}</a>
          </li>
        </ul>
      </nav>
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
  </header><!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  
  <main id="main">

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Lycée GASMO 2021</span></strong>
      </div>
      <div class="credits">
      
        <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> 

  <script src="/assets/vendor/jquery/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
  <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/js/main.js"></script>
  
</body>

</html>























































