<?php
// include_once "./classes/dbHandler.php";
// // maak connectie met DB
// $db = new dbHandler();
?>
<!DOCTYPE html>
<html>

<head>
    
    <link rel="stylesheet" href="#">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


    <!-- Template JS stemwijzer -->
    <!-- <script type="text/javascript" src="./JS/jsFunctions.js"></script> -->
    <!-- JQuery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->

<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

  <nav id="navbar" class="navbar nav-menu">
    <ul>
    <li><a href="{{'/old'}}"  class="nav-link scrollto active"><i class="bi bi-house"></i> <span>Home</span></a></li>
      <li><a href="{{'/partijen'}}"  class="nav-link scrollto"><i class="bi bi-people"></i> <span>Partijen</span></a></li>
      <li><a href="{{'/themas'}}" class="nav-link scrollto"><i class="bi bi-yin-yang"></i> <span>Thema's</span></a></li>
      <li><a href="#"  class="nav-link scrollto"><i class="bi bi-card-checklist"></i> <span>Stemwijzer</span></a></li>
    </ul>
  </nav><!-- .nav-menu -->

</header><!-- End Header -->


<!-- ======= Hero Section ======= -->
<section id="home" class="d-flex flex-column justify-content-center">
    <div class="row">
        <div class="col d-flex flex-column justify-content-center">
            <div>
                    <h1 style="width:100% ;">Welkom bij <span id="home_span" style="font-size:92%;">Stemwijzer.</span></h1>
                <p><a href="" class="typewrite" data-period="2000" data-type='[ "Politiek.", "Vrijheid.", "Kansen." ]'>
                    <span class="wrap"></span>
                </a></p>
            </div>
        </div>
        <div class="col">
            <div class="humans_img">
            <img src="{{asset('assets/img/humans/sitting-6.png')}}">
                
            </div>
        </div>
    </div>


   
</section><!-- End Hero -->

<main id="main" class="d-flex flex-wrap justify-content-center">
           
     <div class="row">
        <div class="col"> 
            <div class='row'>
                <div id='myProgress'>
                    <div id='progressbar'>0%</div>
                </div>
            </div>
            <form method='post' action='stemwijzerResultaat.php'>
                <?php
                // $standpunt = $db->selectStandpunt();

                // // this is the div id, NOT the database ID!
                // // don't use DB ID as id or JS function will cease to work!
                // $id = 1;
                // foreach ($standpunt as $standpuntItem) {
                //         echo"<div id=$id style='display:none;'>
                //                 <div class='row'>
                //                     <div class='col d-flex justify-content-center align-items-center'>
                //                         <div class='standpunt'>
                //                             <p>$standpuntItem[standpunt]</p>
                //                         </div>
                //                     </div>
                //                 </div>
                //                 <br>
                //                 <div class='row'>
                //                     <div class='buttons d-flex'>
                //                         <div class='col d-flex justify-content-center'> 
                //                             <div class='box2 d-flex justify-content-center align-items-center'>
                //                                 <label for='" . $id . "oneens'> Oneens </label>
                //                                 <input type='radio' id='" . $id . "oneens' onclick='hideDiv(" . $id . ")'  value='0' name='" . $standpuntItem['standpunt_id'] . "'/>
                //                             </div>
                //                         </div>
                //                         <div class='col d-flex justify-content-center'> 
                //                             <div class='box1 d-flex justify-content-center align-items-center'>
                //                                 <label for='" . $id . "eens'> Eens </label>
                //                                 <input type='radio' id='" . $id . "eens' onclick='hideDiv(" . $id . ")' value='1' name='" . $standpuntItem['standpunt_id'] . "'/>
                //                             </div>
                //                         </div>
                //                     </div>
                //                 </div>
                //             </div>";
                //     $id++;
                // }
                // echo "<div id=$id style='display:none'> 
                //     <input class='btn btn-primary' type='submit' value='Toon resultaat'> 
                //     </div>"
                ?>
            <script>
           
            </script>
            
            </form>
           
        </div>
     </div>          
    

</main><!-- End #main -->





<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!-- Other JS Files -->
<script src="assets/js/swiper.js"></script>


    <!-- shows first stelling -->
    <!-- <script type="text/javascript">
        showFirstDiv();
    </script> -->
</body>

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

</html>