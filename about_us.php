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
        @media only screen and (max-width: 800px) {
            #titleLine{
                font-size: 24px;
            }
        }
        #pageTitle{
            background: url(storage/genserv_pages_images/about.jpg) no-repeat center fixed; 
            background-size: cover;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            height: 400px;
            padding: 155px 0;
            opacity: .7;
        }
        #titleLine{
            border-bottom: 5px solid powderblue;
        }
    </style>
    <script>
        $(document).ready(function(){    
            $("#title").animate({
                fontSize: '60px',
            });    
        });
    </script>
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    <li class="nav-item">
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
    <div id="pageTitle" class='jumbotron'>
        <h6 id="title" class='text-light text-center'><span id="titleLine">About Us</span></h6>
    </div>    
        <div class='container'>    
            <div class="row">
                <div class="col-sm-12">
                        <div class="card mb-3 bg-info text-white">
                            <div class="card-body">
                                <h2 class="card-title"><b>Our Mission</b></h2>
                                <p class="card-text">GENSERV INTERNATIOINAL, INC. is aiming to be the best in the in our place by giving them the best service and work force. We are willing to be committed and to do our very best for our clients. </p>
                             </div>
                        </div>
                </div>
                <div class="col-sm-12">
                        <div class="card mb-3 bg-info text-white">
                            <div class="card-body">
                                <h2 class="card-title"><b>Our Vision</b></h2>
                                <p class="card-text">GENSERV INTERNATIOINAL, INC. we will continue to raise, READY TO BE YOUR BRIDGE TO SUCESS! In a very short time our goal is to help people conserve and save our mother earth through these best products such as LED Lights, Solar Energy, CCTV Camera, Satellite TV, Elevator, Flood Gate,iGSAT Satellite Broadband. Our Long term goal is staying with the company who believed in us. </p>
                             </div>
                        </div>
                </div>
                <div class="col-sm-12">
                        <div class="card mb-3 bg-info text-white">
                            <div class="card-body">
                                <h2 class="card-title"><b>Our Corporate Core Values</b></h2>
                                <p class="card-text">A commitment to sustainability and to acting in an environmentally friendly way,commitment to innovation and excellence, commitment to doing good for the whole, commitment to building strong communities.</p>
                             </div>
                        </div>
                </div>
                <div class="col-sm-12">
                        <div class="card mb-3 bg-info text-white">
                            <div class="card-body">
                                <h2 class="card-title"><b>Services</b></h2>
                                <p class="card-text">Our services to our client's lies at the heart of what we do, we regularly seek our client's views on the service we offer and value the feedback we get. By providing the facility for feedback to be given can tell us what they think about the service we are providing at any stage, and not just when we ask for it. Where there scope of improvement we genuinely want to know that, so we can take an action. </p>
                             </div>
                        </div>
                </div>
                <div class="col-sm-12">
                        <div class="card mb-3 bg-info text-white">
                            <div class="card-body">
                                <h2 class="card-title"><b>Quality Policy</b></h2>
                                <p class="card-text">Genserv International is committed to meeting customer requirements and enhancing customer satisfaction through continual improvement of its products, services and the quality management system. We recognized that the quality of the service we offer to our clients can only be achieved by having highly motivated, committed and train staff.</p>
                             </div>
                        </div>
                </div>
                <div class="col-sm-12">
                        <div class="card mb-3 bg-info text-white">
                            <div class="card-body">
                                <h2 class="card-title"><b>Our Products</b></h2>
                                <p class="card-text"><li>LED Lighting Systems </li></p>
                                <p class="card-text"><li>CCTV Security Systems  </li></p>
                                <p class="card-text"><li>Satellite TV Programs  </li></p>
                                <p class="card-text"><li>Elevator Services </li></p>
                                <p class="card-text"><li>Watertight Gate (Flood Control) </li></p>
                                <p class="card-text"><li> iGSAT Satellite Broadband </li></p>
                             </div>
                        </div>
                </div>
            </div>
        </div> 
    <?php 
    include_once('footer.php');
    ?>        
</body>
</html>
