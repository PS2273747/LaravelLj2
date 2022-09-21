<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>KiesNu.nl</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- Template UI CSS File -->
<link href="assets/css/UI.css" rel="stylesheet">


</head>

<body>
<!-- ======= Mobile nav toggle button ======= -->

<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

  <nav id="navbar" class="navbar nav-menu">
    <ul>
      <li><a href="#"  class="nav-link scrollto active"><i class="bi bi-house"></i> <span>Home</span></a></li>
      <li><a href="Partijen.php"  class="nav-link scrollto"><i class="bi bi-people"></i> <span>Partijen</span></a></li>
      <li><a href="Thema's.php" class="nav-link scrollto"><i class="bi bi-yin-yang"></i> <span>Thema's</span></a></li>
      <li><a href="stemwijzer.php"  class="nav-link scrollto"><i class="bi bi-card-checklist"></i> <span>Stemwijzer</span></a></li>
    </ul>
  </nav><!-- .nav-menu -->

</header><!-- End Header -->


<!-- ======= Hero Section ======= -->
<section id="home" class="d-flex flex-column justify-content-center">
    <div class="row">
        <div class="col d-flex flex-column justify-content-center">
            <div>
                    <h1>Welkom bij <span id="home_span">KiesNu.</span></h1>
                <p><a href="" class="typewrite" data-period="2000" data-type='[ "Politiek.", "Vrijheid.", "Kansen." ]'>
                    <span class="wrap"></span>
                </a></p>
            </div>
        </div>
        <div class="col">
            <div class="humans_img">
                <img src="../Project3_site/assets/img/humans/standing-23.png">
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


<?php
include_once 'Footer.php';
?>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<!-- Other JS Files -->
<script src="assets/js/swiper.js"></script>

</body>

</html>