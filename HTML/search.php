<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Asentus" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>TEXACO FIVE/PRODUCTS</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="img/texaco.jpg" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/texaco.jpg" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="index.html">Home</a></li>
                                
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.html">About</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="products.html">Products</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">Products</h1>
                <p>We are equipped with a variety of high quality products Ranging from Power Products,Electrical Products,Consumer Electronics,Hydraulics,Process Automation and also Automation Products</p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Our Exceptional Solutions -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Our Exceptional Products</h2>
                    <p>We provide high quality and also variety at large</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row margin-b-50">
             <!-- Our Exceptional Solutions -->
           
      <?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "texaco";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=@$_POST['search'];
$query = $pdo->prepare("select * from electronics where itemno LIKE '%$search%' OR itemname LIKE '%$search%'  LIMIT 0 , 30");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Number </td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Type of The Item</td></tr>";             
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:50px;border-color:#98bf21;\">";            
                echo $results['itemno'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['itemname'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['type'];
                
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
            //echo '<strong>Sorry Nothing Was Found! Try Search for the Item Again</strong>';
        }
?>
     <?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "texaco";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=@$_POST['search'];
$query = $pdo->prepare("select * from pneumatics where itemno LIKE '%$search%' OR itemname LIKE '%$search%'  LIMIT 0 , 30");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Number </td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Type of the Item</td></tr>";             
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:50px;border-color:#98bf21;\">";            
                echo $results['itemno'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['itemname'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['type'];
            
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
           // echo '<strong>Sorry Nothing Was Found! Try Search for the Item Again</strong>';
        }
?>
<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "texaco";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=@$_POST['search'];
$query = $pdo->prepare("select * from instruments where itemno LIKE '%$search%' OR itemname LIKE '%$search%'  LIMIT 0 , 30");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Number </td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Type of the Item</td></tr>";             
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:50px;border-color:#98bf21;\">";            
                echo $results['itemno'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['itemname'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['type'];
                
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
            //echo '<strong>Sorry Nothing Was Found! Try Search for the Item Again</strong>';
        }
?>

<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "texaco";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=@$_POST['search'];
$query = $pdo->prepare("select * from liftings where itemno LIKE '%$search%' OR itemname LIKE '%$search%'  LIMIT 0 , 30");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Number </td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Type of the Item</td></tr>";             
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:50px;border-color:#98bf21;\">";            
                echo $results['itemno'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['itemname'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['type'];
                
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
            //echo '<strong>Sorry Nothing Was Found! Try Search for the Item Again</strong>';
        }
?>
  
  <?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "texaco";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=@$_POST['search'];
$query = $pdo->prepare("select * from pneumatics where itemno LIKE '%$search%' OR itemname LIKE '%$search%'  LIMIT 0 , 30");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Number </td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Type of the Item</td></tr>";             
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:50px;border-color:#98bf21;\">";            
                echo $results['itemno'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['itemname'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['type'];
                
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
            //echo '<strong>Sorry Nothing Was Found! Try Search for the Item Again</strong>';
        }
?>   
  
  <?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "texaco";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=@$_POST['search'];
$query = $pdo->prepare("select * from safety where itemno LIKE '%$search%' OR itemname LIKE '%$search%'  LIMIT 0 , 30");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Number </td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Type of the Item</td></tr>";             
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:50px;border-color:#98bf21;\">";            
                echo $results['itemno'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['itemname'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['type'];
                
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
            //echo '<strong>Sorry Nothing Was Found! Try Search for the Item Again</strong>';
        }
?>
<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "texaco";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=@$_POST['search'];
$query = $pdo->prepare("select * from spares where itemno LIKE '%$search%' OR itemname LIKE '%$search%'  LIMIT 0 , 30");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Number </td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Type of the item</td></tr>";             
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:50px;border-color:#98bf21;\">";            
                echo $results['itemno'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['itemname'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['type'];
                
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
            //echo '<strong>Sorry Nothing Was Found! Try Search for the Item Again</strong>';
        }
?>
<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "texaco";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=@$_POST['search'];
$query = $pdo->prepare("select * from tools where itemno LIKE '%$search%' OR itemname LIKE '%$search%'  LIMIT 0 , 30");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Number </td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Type of the Item</td></tr>";             
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:50px;border-color:#98bf21;\">";            
                echo $results['itemno'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['itemname'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['type'];

                
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
            //echo '<strong>Sorry Nothing Was Found! Try Search for the Item Again</strong>';
        }
?>

<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "texaco";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=@$_POST['search'];
$query = $pdo->prepare("select * from welding where itemno LIKE '%$search%' OR itemname LIKE '%$search%'  LIMIT 0 , 30");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Number </td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Item Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Type of the item</td></tr>";             
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:50px;border-color:#98bf21;\">";            
                echo $results['itemno'];
                echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['itemname'];
                 echo "</td><td style=\"border-style:solid;border-width=50px;border-color:#98bf21;\">";
                echo $results['type'];
                
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
            //echo '<strong>Sorry Nothing Was Found! Try Search for the Item Again</strong>' ;
        }

?>



                <!-- End Our Exceptional Solutions -->
            </div>
            <!--// end row -->

        <!-- End Our Exceptional Solutions -->

        <!-- Clients -->
       
        <!-- End Clients -->

        <!-- Promo Section -->

        <!-- End Promo Section -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
       
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>
    </div>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>