<?php
include_once "./classes/dbHandler.php";
// maak connectie met DB
$db = new dbHandler();
?>
<!DOCTYPE html>
<html>

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <!-- Template JS stemwijzer -->
    <script type="text/javascript" src="./JS/jsFunctions.js"></script>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <!-- ======= Mobile nav toggle button ======= -->

<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

  <nav id="navbar" class="navbar nav-menu">
    <ul>
      <li><a href="Index.php"  class="nav-link scrollto"><i class="bi bi-house"></i> <span>Home</span></a></li>
      <li><a href="Partijen.php"  class="nav-link scrollto "><i class="bi bi-people"></i> <span>Partijen</span></a></li>
      <li><a href="Thema's.php" class="nav-link scrollto"><i class="bi bi-yin-yang"></i> <span>Thema's</span></a></li>
      <li><a href="#"  class="nav-link scrollto  active"><i class="bi bi-card-checklist"></i> <span>Stemwijzer</span></a></li>
    </ul>
  </nav><!-- .nav-menu -->

</header>
<!-- end header -->

<!-- ======= Hero Section ======= -->
<section id="home_resultaat" class="d-flex flex-column justify-content-center">
    
   
</section><!-- End Hero -->

<main id="main" class="d-flex flex-wrap justify-content-center">
           
     <div class="row">
        <div class="col"> 
            <h1>Je resultaat voor de verkiezingen</h1>
                    <?php
                    $scores = [];
                    $partijen = $db->getAllPartijen();
                    foreach($partijen as $partij){
                        $scores[$partij['partij_id']] =0;
                    }
                    // gets associative array with standpuntID as key and mening as value
                    // these are both used as parameters for the getPartijenMening function Query
                    foreach($_POST as $standpuntId => $mening){
                        // gets partijen who have same mening as gebruiker and save it into scorePartijen
                    $scorePartijen = $db->getPartijenMening($standpuntId, $mening);
                        foreach($scorePartijen as $scorePartij){
                            //partij_id is a key in the associative array
                            $scores[$scorePartij['partij_id']] +=1;
                    
                        }
                        
                    }
                    // sorts scores in descending order
                    // sorts scores in descending order
                    arsort($scores);
                    $id=0;
                    foreach($scores as $partijId=>$partijScore){

                        $id++;
                    $partijNaam = $db->getPartijNaam($partijId);
                        echo "<div>".$partijNaam['naam'] . " - $partijScore <br></div>
                        <div id='prgress'>
                                    <div id='progressbar".$id."'>0%</div>
                                </div>
                                <script type='text/javascript'>
                                procent($partijScore,$id);
                                </script>";
                    }
                    ?>

                
        </div>
     </div>          
    

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