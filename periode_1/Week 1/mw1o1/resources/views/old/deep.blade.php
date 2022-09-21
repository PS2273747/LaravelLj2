<!-- <?php
// include_once "#verwijzing naar DB";
// maak connectie met DB
// $db = new verkiezingDB(); 
?> -->


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>KiesNu.nl</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{asset('assets/img/favicon.png')}}" rel="icon">


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<!-- Template UI CSS File -->
<link href="{{asset('assets/css/UI.css')}}" rel="stylesheet">


</head>

<body>
<!-- ======= Mobile nav toggle button ======= -->

<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

  <nav id="navbar" class="navbar nav-menu">
    <ul>
      <li><a href="#"  class="nav-link scrollto active"><i class="bi bi-house"></i> <span>Home</span></a></li>
      <li><a href="{{'/partijen'}}"  class="nav-link scrollto"><i class="bi bi-people"></i> <span>Partijen</span></a></li>
      <li><a href="{{'/themas'}}" class="nav-link scrollto"><i class="bi bi-yin-yang"></i> <span>Thema's</span></a></li>
      <li><a href="{{'/stemwijzer'}}"  class="nav-link scrollto"><i class="bi bi-card-checklist"></i> <span>Stemwijzer</span></a></li>
    </ul>
  </nav><!-- .nav-menu -->

</header><!-- End Header -->


<!-- ======= Hero Section ======= -->
<section id="home" class="d-flex flex-column justify-content-center">
    <div class="row">
        <div class="col d-flex flex-column justify-content-center">
            <div>
                    <h1>Welkom bij <span id="home_span">KiesNu.</span></h1>
                <p><a href="" class="typewrite" data-period="2000" data-type='[ "ik wist niet wat ik hier zou doen", "dus ik maakte deze pagina.", "echt zinnig is het niet." ]'>
                    <span class="wrap"></span>
                </a></p>
            </div>
        </div>
        <div class="col">
            <div class="humans_img">
                <img src="{{asset('assets/img/humans/standing-23.png')}}">
            </div>
        </div>
    </div>


   
</section><!-- End Hero -->

<main id="main" class="d-flex flex-column justify-content-center">

<figure class="card col-md-11" >
    <div class="row">
        <div>
        <p>Welkom bij KiesNu. Op deze site kun alle informatie vinden over de partijen die meedoen aan de verkiezingen.</p>
        <p>De volgende verkiezingen zijn op 15 maart 2023. We kiezen dan de nieuwe Provinciale Staten.</p>
    
        <div class="d-flex">
            <p>Klik hier om onze stemwijzer uit te voeren.</p>
            <div id="stemwijzerbtn">
                <button class="btn btn-primary"><a href="stemwijzer.php">Stemwijzer</a></button>   
            </div>
        </div>
        
        </div>
    </div>
</figure>


  
  

</main><!-- End #main -->


<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <h3>Kies<span>Nu</span></h3>
    <p>Een rechtvaardig man is rechtvaardig, zelfs in de politiek. </p>
    <p>-Ghandi</p>
    <div class="social-links">
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    <div class="copyright">
      &copy; Copyright <strong><span>Tdesign</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <strong><span>Tdesign</span></strong> 
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- Other JS Files -->
<script src="{{asset('assets/js/swiper.js')}}"></script>

</body>

</html>