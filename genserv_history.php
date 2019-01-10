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
            background: url(storage/genserv_pages_images/story.jpg) no-repeat center fixed; 
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
        <h6 id="title" class='text-light text-center'><span id="titleLine">Genserv International Inc. History</span></h6>
    </div>
        <div class='container'>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Our History</h2>
                            <p class="card-text"><b>Established in 1999, <abbr title="GLOBAL PACIFIC CONGLOMERATES, Inc. ">GPCI </abbr></b>has provided Metro Manila and surrounding municipalities with communication monitoring systems for cable televisions, closed circuit televisions (CCTV), and MATV. GPCI has maintained its position as a market leader in the Design, Supply, Fabrication and Installation of Program Data and other associated technologies. It has done this by maintaining highly trained and skilled engineers, installation and maintenance technicians strengthened by a competent management team in sales and marketing, client services and accounts. On the same year, this team spearheaded a partnership with GLOBAL CABLE TELEVISION, INC. (GCTV) to provide underground communication services for the Skyway Project.</p>
                            <p class="card-text">In the year <b>2001</b>, the company conceived of a program using satellite technology to deliver lessons to areas without teachers or classrooms. The objective was to improve teaching and education for English, mathematics and science subjects to these communities. This enabled communities to arrange classes wherever they could set up a receiver and a television monitor. Despite being the smallest company among the bidders, <b><abbr title="GLOBAL PACIFIC CONGLOMERATES, Inc. ">GPCI </abbr></b> won the award. Department of Education awarded the contract to <b><abbr title="GLOBAL PACIFIC CONGLOMERATES, Inc. ">GPCI </abbr></b> based on having the best offer in terms of technology (due to the partnership with Mabuhay Satellite). And this event was seconded by another discovery and learning project through satellite broadcast duly signed and approved by the Department of Education, but failed to go further due to change in administration in the government. </p>
                            <p class="card-text">In <b>2002, <abbr title="GLOBAL PACIFIC CONGLOMERATES, Inc. ">GPCI </abbr></b> promotes and introduce Dream Satellite to foreign market and lasted for <b>6 years until 2008.</b></p>
                            <p class="card-text">In the year <b>2003</b>, established the Communication Project in TransGlobal Clark, Pampanga, which includes products and services on communication systems, MATV, CATV CCTV and Internet. </p>
                            <p class="card-text">In <b>2004, <abbr title="GLOBAL PACIFIC CONGLOMERATES, Inc. ">GPCI </abbr></b> invites Acer Taiwan Special Team to a feasibility study for China Railway Project, which introduced 3-in-1 solutions that comprises of television (TV), internet and phone. </p>
                            <p class="card-text">In <b>2007</b>, due to change of stockholders and the company's direction to widen its products and services, <b><abbr title="GLOBAL PACIFIC CONGLOMERATES, Inc. ">GPCI </abbr></b> was reorganized and its name was changed to <b>Genserv International, Inc.</b> The new company is fully capable of undertaking big projects despite its limitations. <b>Genserv International, Inc.</b> has continued to provide clients with communication services, in addition to providing supplies and services for alternative energy products. </p>
                            <p class="card-text">In <b>2008</b>, the company introduced the <b><abbr title="Global Satellite">GSAT</abbr></b> to both local and foreign market. <b><abbr title="Global Satellite">GSAT</abbr></b> is the best alternative source of international entertainment and information in areas beyond the reach of cable television. It was born out of response to the growing demand for a better direct-to-home satellite TV provider across the Philippines. With its vast satellite footprint, its signal also reaches Asian countries like Mongolia, China, Japan, North and South Korea, Taiwan, Malaysia and other parts of South Asia. </p>
                            <p class="card-text">Starting <b>2010</b>, <b>Genserv International Inc.</b> was engaged in providing the Philippines with the best products and technology to minimize the carbon footprint in our country, through renewable solar energy, wind energy. <b>Genserv International Inc.</b> also continue providing LED lighting products and services such as indoor and outdoor lighting design. We provide high quality LED products from Taiwan, which are significantly reliable, much lower in power consumption, cost effective and environmentally friendly. </p>
                            <p class="card-text">We also provide home and business security through our network-based and Internet-enabled CCTV security systems. With reliable products from Taiwan, our surveillance cameras, digital video recorders (DVRs), and other parts and accessories, keeps your security worries away. Aside from our products, we also provide installation and maintenance services. At the last quarter of <b>2010</b>, we partnered with <b>KODER</b> Elevator Company, former member of a Japan brand distributor company in Taiwan, which was established <i>twenty (20)</i> years ago specializing elevator installation, replacement and maintenance more than <i>200</i> successfully finished projects in Taiwan to date, and expanded its services to the Philippines. In <b>2011</b>, we started Elevator Business providing installation, elevator replacement, and design services. </p>
                            <p class="card-text">In the year <b>2015 Genserv International Inc.</b> expands its product and services to the Flood Gate System (Watertight Gate). After years of research and development, <b>Dai Chen</b> has designed the most trusted and top quality flood gate product in Taiwan. The company obtained patents in Taiwan, Japan, and Thailand and now in the Philippines. And by then, we became an exclusive distributor of <b>Dai Chen</b> products from Taiwan. </p>
                            <p class="card-text">At the last quarter of <b>2015, iGSAT Internet Satellite Broadband</b> was launched. <b>iGSAT</b> Broadband provides exceptional performance, with its durability and reliability, that covers even in the most remote areas nationwide, to support maritime industry, medical facilities, government offices, schools, as well as military and police communications. </p>
                            <p class="card-text">And as of this year <b><?php echo $d = date("Y");?></b>, we are still continuing to grow and making way to new products and technologies, like the Summit Water System and Battery Recovery System. </p>
                            <p class="card-text">For the past <b><?php echo $d=date("Y") - 1999;?> years</b>, we continued to grow, and widen our wings through better product selections and provide the best and most reliable services to our clients as they are considered our priority our job number one. We pledged to continue to find better ways to provide only the best in terms of products and services. </p>
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
