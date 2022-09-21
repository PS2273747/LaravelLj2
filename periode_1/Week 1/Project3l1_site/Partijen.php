<!-- <?php
include_once "Classes/dbHandler.php";
// maak connectie met DB
$db = new dbHandler(); 
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
      <li><a href="Index.php"  class="nav-link scrollto"><i class="bi bi-house"></i> <span>Home</span></a></li>
      <li><a href="#"  class="nav-link scrollto  active"><i class="bi bi-people"></i> <span>Partijen</span></a></li>
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
                    <h1>Welkom bij <span id="home_span">Partijen.</span></h1>
                <p><a href="" class="typewrite" data-period="2000" data-type='[ "Politiek.", "Vrijheid.", "Kansen." ]'>
                    <span class="wrap"></span>
                </a></p>
            </div>
        </div>
        <div class="col">
            <div class="humans_img">
                <img src="../Project3_site/assets/img/humans/sitting-7.png">
            </div>
        </div>
    </div>


   
</section><!-- End Hero -->

<main id="main" class="d-flex flex-wrap justify-content-center">

<figure class="card col-md-11" >
    <div class="row">
        <div>
            <p>Welkom op de partijen pagina. Hierop kun je alle partijen vinden met hun informatie en contactgegevens.</p>
        </div>
    </div>
</figure>


        <?php
        $rows = $db -> selectPartijen();

        foreach($rows as $row){
           echo '<div class="row">
                    <div class="col d-flex flex-wrap">
                        <div class="blog_post">
                            <div class="img_pod">
                                <img src='.$row['logo_url'].' alt="random image">
                            </div>
                            <div class="container_copy">
                                <h3>'.$row['afkorting'].'</h3>
                                <h1>'.$row['naam'].'</h1>
                                <p>'.$row['adres'].'</p>
                                <p>'.$row['postcode'].'</p>
                                <p>'.$row['gemeente'].'</p>
                                <p>'.$row['emailadres'].'</p>
                                <p>'.$row['telefoonnummer'].'</p>
                            </div>
                        </div>
                    </div>
                 </div>';
        }
        ?>



  
  

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