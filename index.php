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
        @media only screen and (max-width: 800px) {
            
            .CText{
                font-size: 12px;
            }
            .CTitle{
                font-size: 24px;
                font-weight: bold;
            }
            #titleLine{
                font-size: 24px;
            }
        }
        #pageTitle{
            background: url(storage/genserv_pages_images/products.jpg) no-repeat center fixed; 
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
    <script src="node_modules/bootstrap/scss/bootstrap.css"></script> 
    <script>
        $(document).ready(function(){    
            $("#title").animate({
                fontSize: '60px',
            });    
        });
    </script>
</head>
<body>
    <!--START OF CAROUSEL-->
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active p-2"></li>
            <li data-target="#demo" data-slide-to="1" class="p-2"></li>
            <li data-target="#demo" data-slide-to="2" class="p-2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/storage/carousel_images/carousel1.png" alt="Satellite" width="1100" height="500">
                <div class="carousel-caption">
                    <h1 class='CTitle text-success display-4'><b>CORPORATE CORE VALUES</b></h1>
                    <p class='CText bg-success rounded lead'><strong>A commitment to sustainability and to acting in an environmentally friendly way, commitment to innovation and excellence,
                    commitment to doing good for the whole, commitment to building strong communities.
                    </strong>
                    </p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="/storage/carousel_images/carousel2.png" alt="Elevator" width="1100" height="500">
                <div class="carousel-caption">
                    <h1 class='CTitle text-success display-4'><b>Our Mission</b></h1>
                    <p class='CText bg-success rounded lead'><strong>GENSERV INTERNATIONAL, INC. is aiming to be the best in our place by giving them the best service and work force. We are willing to be committed and to do our very best for our clients. </strong></p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="/storage/carousel_images/carousel3.png" alt="Building" width="1100" height="500">
                <div class="carousel-caption">
                    <h1 class='CTitle text-success display-4'><b>Our Vision</b></h1>
                    <p class='CText bg-success rounded lead'><strong>GENSERV INTERNATIOINAL, INC. will continue to raise, READY TO BE YOUR BRIDGE TO SUCESS! In a very short time our goal is to help people conserve and save our mother earth through these best products such as LED Lights, Solar Energy, CCTV Camera, Satellite TV, Elevator, Flood Gate,iGSAT Satellite Broadband. Our Long term goal is staying with the company who believed in us. </strong></p>
                </div>   
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon p-4"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon p-4"></span>
        </a>
    </div>
    <!--END OF CAROUSEL-->

    <!--START OF NAVIGATION-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top navbar">
        <div class="container">
            <!--<a class="navbar-brand" href="http://genserv.com">GENSERV WEBSITE</a>-->
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
                <img src="/storage/genserv_logos/genserv-logo.png" alt="genserv-logo" style="width:40px;">
                <small>GENSERV INTERNATIONAL INC.</small>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
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
        <h6 id="title" class='text-light text-center'><span id="titleLine">Our Products and Services</span></h6>
    </div>

    <div class='container'>
        <div class="row">
            <div class="col-sm-4 pb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/genserv_products_images/elevator.png" alt="Elevator Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Elevator Services</h4>
                        <p class="card-text">The KODER elevator compassed many of the common attributes 
                            expected by today’s modern society, safety, reliability, performance, comfort 
                            and a design based on human needs. It is the result of the company’s research 
                            and development efforts and embraces the latest leading edge technology complied 
                            with the proceeding might and the versatility of the humble microprocessor. 
                            Versatility is achieved via programmable micro-controllers, the software which can 
                            be written to cater to the exact requirements of the client. Our engineers have made 
                            every effort to ensure simplicity in the system design while at the same time 
                            maintaining system efficiency and versatility.
                        </p>
                        <a href="elevator_products.php" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 pb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/genserv_products_images/satellite.png" alt="Satellite Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Satellite Services</h4>
                        <p class="card-text">GLOBAL SATELLITE (G-SAT) is the best alternative source of 
                            international entertainment and information in areas beyond the reach of cable 
                            television. It was born out of response to the growing demand for a better 
                            direct-to-home satellite TV provider across the Philippines. With its vast 
                            satellite footprint, its signal also reaches Asian countries like Mongolia, 
                            China, Japan, North and South Korea, Taiwan, Malaysia and other parts of South 
                            Asia.The superior coverage of its satellite provider is even complemented by 
                            the intense security protection of its conditional access provider. This ensures 
                            security of the program content, the access system and the very technology that 
                            DTH system utilizes. Capitalizing on the latest multi-media technology,GSAT aims 
                            to carry communication and entertainment services in an affordable package that 
                            would cater to the general public. Its programming is centered on offering wide 
                            range of genre to entertain.
                        </p>
                        <a href="satellite_products.php" class="btn btn-primary">More Info</a>
                    </div>
                </div> 
            </div>

            <div class="col-sm-4 pb-4">
                <div class="card">
                    <img class="card-img-top" src="/storage/genserv_products_images/floodgate.png" alt="Watergate Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Water Gate (Flood Gate)</h4>
                        <p class="card-text">Genserv International Inc. expands its product and services to the Flood 
                            Gate System (Watertight Gate) we are the EXCLUSIVE DISTRIBUTOR of DAI-CHEN PRODUCTS. After 
                            years of research and development, Dai Chen has designed the most trusted and top quality 
                            flood gate product in Taiwan. The company obtained patents in Taiwan, Japan,Thailand, 
                            Australia and Philippines. And by then, we became an exclusive distributor of Dai Chen 
                            products from Taiwan. Floodgate Sytem Originally it was an aluminum window company. As the 
                            company grew stronger, it expanded its product line to include flood gate systems. After a 
                            few years of research and development, Floodgate has developed the highest quality and most 
                            trusted flood gate system in Taiwan. </p>
                        <a href="floodgate_products.php" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>

            <div class='col-sm-4 pb-4'>
                <div class='card'>
                    <img class="card-img-top" src="/storage/genserv_products_images/ceiling_circulation_fan.png" alt="Ceiling Fan Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Ceiling Circulation Fan</h4>
                        <p class="card-text">GENTECH Ceiling Circulation Fan / Energy Saving Fan is a brilliant ceiling fan with unique design 
                            and state of the art technology. The unique design concepts breaking the conventional ceiling fans, 
                            enhancing the airflow movement and refreshing air throughout indoor environment. It can satisfy all 
                            differentkind of condition requirements, and bring you a healthy, comfortable and energy saving life.
                        </p>
                        <a href="industrial_and_security_products.php?id=6" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>

            <!--<div class='col-sm-4 pb-4'>
                <div class='card'>
                    <img class="card-img-top" src="/storage/genserv_products_images/led.png" alt="LED Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title text-primary">LED Products</h4>
                        <p class="card-text">The useful life of LED lighting products is defined differently 
                        than that of other light sources, such as incandescent or compact fluorescent 
                        lighting (CFL). LEDs typically do not “burn out” or fail. Instead, they experience 
                        ‘lumen depreciation’, wherein the brightness of the LED dims slowly over time. 
                        Unlike incandescent bulbs, LED “lifetime” is established on a prediction of when                                     the light output decreases by 30 percent. LEDs use heat sinks to absorb the heat 
                        produced by the LED and dissipate it into the surrounding environment. This keeps 
                        LEDs from overheating and burning out. Thermal management is generally the single 
                        most important factor in the successful performance of an LED over its lifetime. 
                        The higher the temperature at which the LEDs are operated, the more quickly the light 
                        will degrade, and the shorter the useful life will be.
                        </p>
                        <a href="industrial_and_security_products.php?id=4" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>-->

            <div class='col-sm-4 pb-4'>
                <div class='card'>
                    <img class="card-img-top" src="/storage/genserv_products_images/cctv_dvr.png" alt="CCTV and DVR Image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title text-primary">Security Products</h4>
                        <p class="card-text">CCTV (closed-circuit television) is a TV system in which signals are not publicly 
                            distributed but are monitored, primarily for surveillance and security purposes.
                            CCTV relies on strategic placement of cameras, and observation of the camera's input on
                            monitors somewhere. Because the cameras communicate with monitors and/or video recorders 
                            across private coaxial cable runs or wireless communication links, they gain the designation 
                            "closed-circuit" to indicate that access to their content is limited by design only to those 
                            able to see it. Older CCTV systems used small, low-resolution black and white monitors 
                            with no interactive capabilities. Modern CCTV displays can be color, high-resolution 
                            displays and can include the ability to zoom in on an image or track something 
                            (or someone) among their features. Talk CCTV allows an overseer to speak to people 
                            within range of the camera's associated speakers. We are an exclusive distributor of KIM security products.
                        </p>
                        <a href="industrial_and_security_products.php" class="btn btn-primary">More Info</a>
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
