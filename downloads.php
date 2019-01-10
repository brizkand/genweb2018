<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kevin Holgado">
    <link rel="shortcut icon" type="image/x-icon" href="storage/genserv_logos/genserv-logo.png" />
    <title>GENSERV WEBSITE</title>
   
    <!--JQUERY-->
    <script src="genserv_jquery/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
     <!-- BOOTSTRAP JS -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="resources/css/app.css" rel="stylesheet">
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>
    <script src="node_modules/bootstrap/scss/bootstrap.css"></script> 
</head>
<body>
    <!--START OF NAVIGATION-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top navbar">
        <div class="container">
            <!--<a class="navbar-brand" href="http://genserv.com">GENSERV WEBSITE</a>-->
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
                <img src="/storage/genserv_logos/genserv-logo.png" alt="genserv-logo" style="width:40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">   
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Who We Are<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="about_us.php">About Us</a>
                            <a class="dropdown-item" href="genserv_history.php">Genserv Story</a>  
                            <a class="dropdown-item" href="business_partners.php">Business Partners</a>
                            <a class="dropdown-item" href="genserv_location_map.php">Our Location</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">   
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Our Products<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="satellite_products.php">Satellite Services</a>
                            <a class="dropdown-item" href="elevator_products.php">Elevator Services</a>  
                            <a class="dropdown-item" href="industrial_and_security_products.php">Industrial and Security Products</a>
                            <a class="dropdown-item" href="floodgate_products.php">Flood Control System</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">   
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Our Projects<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="elevator_projects.php">Elevator Finished Projects</a>
                            <a class="dropdown-item" href="satellite_projects.php">Satellite Finished Projects</a>  
                            <a class="dropdown-item" href="igsat_projects.php">Internet Satellite Finished Projects</a>
                            <a class="dropdown-item" href="ceiling_fan_projects.php">Industrial & Security Finished Projects</a>
                            <a class="dropdown-item" href="watergate_projects.php">Flood Gate Control Finished Projects</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="downloads.php">Downloads</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">   
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Let's Connect<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="contact_us.php">Contact Us</a>
                            <a class="dropdown-item" href="jobs.php">Jobs @ Genserv</a>  
                            <a class="dropdown-item" href="news.php">News</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--END OF NAVIGATION-->

    <!--START OF THE CONTENT-->    
    <div id="app" class='container-fluid'>
        <main class="py-4">
            <div class='container'>
                <div class='jumbotron'>
                    <h1 class='text-center'><b>Downloads</b></h1>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="card mb-3 bg-info text-white">
                        <img class="card-img-top" src="/storage/brochures_download/elev_image.png" alt="Elevator Image" style="width:100%">
                            <div class="card-body">
                                <h3 class="card-title"><b>Elevator Brochure</b></h3>
                                <a href="storage/brochures_download/elevator.pdf" class="btn btn-primary" download>Click here to download</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card mb-3 bg-info text-white">
                        <img class="card-img-top" src="/storage/brochures_download/igsat_image.png" alt="iGsat Image" style="width:100%">
                            <div class="card-body">
                                <h3 class="card-title"><b>Internet Satellite Brochure</b></h3>
                                <a href="storage/brochures_download/igsat.pdf" class="btn btn-primary" download>Click here to download</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card mb-3 bg-info text-white">
                        <img class="card-img-top" src="/storage/brochures_download/floodgate_image.png" alt="Elevator Image" style="width:100%">
                            <div class="card-body">
                                <h3 class="card-title"><b>Floodgate Brochure</b></h3>
                                <a href="storage/brochures_download/floodgate.pdf" class="btn btn-primary" download>Click here to download</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card mb-3 bg-info text-white">
                        <img class="card-img-top" src="/storage/brochures_download/cctv_image.png" alt="Elevator Image" style="width:100%">
                            <div class="card-body">
                                <h3 class="card-title"><b>CCTV Brochure</b></h3>
                                <a href="storage/brochures_download/cctv.pdf" class="btn btn-primary" download>Click here to download</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card mb-3 bg-info text-white">
                        <img class="card-img-top" src="/storage/brochures_download/led_image.png" alt="Elevator Image" style="width:100%">
                            <div class="card-body">
                                <h3 class="card-title"><b>LED Lights Brochure</b></h3>
                                <a href="storage/brochures_download/led.pdf" class="btn btn-primary" download>Click here to download</a>
                             </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div> 
    <?php 
    include_once('footer.php');
    ?>       
</body>
</html>
