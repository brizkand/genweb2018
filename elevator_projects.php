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

    <!--<script>
        $(document).ready(function(){
            $('#butmod').on("click", function(){
                var buil = $(this).val();
                $.post("elevator_images_modal.php",{buildPics: buil},function(result){
				//$("#modalView").html(result);
			});
        });
    </script> -->
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

    <!--THIS IS FOR THE CONTENT-->
    <div id="app" class='container-fluid'>
        <main class="py-4">
            <div class='container'>
                <div class='jumbotron'>
                    <h1 class='text-center'><b>Elevator Finished Projects in Philippines</b></h1>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/elevator_projects/techno9.png" alt="Techno Plaza One" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Techno Plaza One</h2>
                                <p class="card-text"><address>Eastwood City Libis, Quezon City</address>
                                <small>2 Units, 1350kg / 20 Passengers</small>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal9">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/elevator_projects/grace9.png" alt="Grace Atlanta One Condominium" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Grace Atlanta One Condominium</h2>
                                <p class="card-text"><address>Grace Ave. Grace Village, Quezon City</address>
                                <small>2 Units, 1000kg / 15 Passengers</small>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal8">Click here to see images</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/elevator_projects/gliese9.png" alt="Gliese Premier Properties Inc." style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Gliese Premier Properties Inc.</h2>
                                <p class="card-text"><address>Quiapo, Manila</address>
                                <small>1 Unit, 550kg / 8 Passengers</small>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal7">Click here to see images</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/elevator_projects/blulane9.png" alt="The Blulane Hotel" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">The Blulane Hotel</h2>
                                <p class="card-text"><address>Sta Cruz, Manila</address>
                                <small>3 Units, 800kg / 12 Passengers</small>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">Click here to see images</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/elevator_projects/premier9.png" alt="Premier Vima Inc." style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Premier Vima Inc.</h2>
                                <p class="card-text"><address>Sta Cruz, Manila</address>
                                <small>1 Unit, 450kg / 6 Passengers</small>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Click here to see images</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/elevator_projects/timstate9.png" alt="Timstate Building" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Timstate Building</h2>
                                <p class="card-text"><address>South Super High-way, Makati City</address>
                                <small>1 Unit, 759kg / 11 Passengers</small>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Click here to see images</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/elevator_projects/marbella9.png" alt="Marbella Condominium" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Marbella Condominium</h2>
                                <p class="card-text"><address>Roxas Boulevard, Pasay City</address>
                                <small>2 Units, 1000kg / 15 Passengers</small>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Click here to see images</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/elevator_projects/globaltower9.png" alt="Global Tower" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Global Tower</h2>
                                <p class="card-text"><address>Bangkal, Makati City</address>
                                <small>2 Units, 600kg / 9 Passengers</small>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Click here to see images</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/elevator_projects/firstglobal9.png" alt="First Global Building" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">First Global Building</h2>
                                <p class="card-text"><address>Legaspi Village, Makati City</address>
                                <small>3 Units, 700kg / 10 Passengers</small>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Click here to see images</a>
                            </div>
                        </div>
                    </div>    
                </div>

                <!-- The Modal Container-->
                <div class="container" id="modalView">
                    <!-- The Modal 1-->
                    <div class="modal fade" id="myModal1">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects where id = '1'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $eID = $row['id'];
                            $eBuildingName = $row['building_name'];
                            $eUnits = $row['units'];
                            $eFloors = $row['floors'];
                            $eCapacity = $row['capacity'];
                            $eLocation = $row['location'];
                            $ePic1 = $row['pic1'];
                            $ePic2 = $row['pic2'];
                            $ePic3 = $row['pic3'];
                            $ePic4 = $row['pic4'];
                            $ePic5 = $row['pic5'];
                            $ePic6 = $row['pic6'];
                            $ePic7 = $row['pic7'];
                            $ePic8 = $row['pic8'];
                            $ePic9 = $row['pic9'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $eBuildingName;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 9;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/elevator_projects/<?php echo 'firstglobal' . $x . '.png';?>" alt="First Global Building" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></br> 
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <!--End of Modal 1-->

                    <!-- The Modal 2-->
                    <div class="modal fade" id="myModal2">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects where id = '2'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $eID = $row['id'];
                            $eBuildingName = $row['building_name'];
                            $eUnits = $row['units'];
                            $eFloors = $row['floors'];
                            $eCapacity = $row['capacity'];
                            $eLocation = $row['location'];
                            $ePic1 = $row['pic1'];
                            $ePic2 = $row['pic2'];
                            $ePic3 = $row['pic3'];
                            $ePic4 = $row['pic4'];
                            $ePic5 = $row['pic5'];
                            $ePic6 = $row['pic6'];
                            $ePic7 = $row['pic7'];
                            $ePic8 = $row['pic8'];
                            $ePic9 = $row['pic9'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $eBuildingName;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <?php
                                            $y = 9;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/elevator_projects/<?php echo 'globaltower' . $x . '.png';?>" alt="Global Tower" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></br> 
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                    <!--End of Modal 2-->
                    
                    <!-- The Modal 3-->
                    <div class="modal fade" id="myModal3">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects where id = '3'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $eID = $row['id'];
                            $eBuildingName = $row['building_name'];
                            $eUnits = $row['units'];
                            $eFloors = $row['floors'];
                            $eCapacity = $row['capacity'];
                            $eLocation = $row['location'];
                            $ePic1 = $row['pic1'];
                            $ePic2 = $row['pic2'];
                            $ePic3 = $row['pic3'];
                            $ePic4 = $row['pic4'];
                            $ePic5 = $row['pic5'];
                            $ePic6 = $row['pic6'];
                            $ePic7 = $row['pic7'];
                            $ePic8 = $row['pic8'];
                            $ePic9 = $row['pic9'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $eBuildingName;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <?php
                                            $y = 9;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/elevator_projects/<?php echo 'marbella' . $x . '.png';?>" alt="Marbella Condominium" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></br> 
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                    <!--End of Modal 3-->

                    <!-- The Modal 4-->
                    <div class="modal fade" id="myModal4">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects where id = '4'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $eID = $row['id'];
                            $eBuildingName = $row['building_name'];
                            $eUnits = $row['units'];
                            $eFloors = $row['floors'];
                            $eCapacity = $row['capacity'];
                            $eLocation = $row['location'];
                            $ePic1 = $row['pic1'];
                            $ePic2 = $row['pic2'];
                            $ePic3 = $row['pic3'];
                            $ePic4 = $row['pic4'];
                            $ePic5 = $row['pic5'];
                            $ePic6 = $row['pic6'];
                            $ePic7 = $row['pic7'];
                            $ePic8 = $row['pic8'];
                            $ePic9 = $row['pic9'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $eBuildingName;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <?php
                                            $y = 9;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/elevator_projects/<?php echo 'timstate' . $x . '.png';?>" alt="Timstate Building" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></br> 
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                    <!--End of Modal 4--> 

                    <!-- The Modal 5-->
                    <div class="modal fade" id="myModal5">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects where id = '5'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $eID = $row['id'];
                            $eBuildingName = $row['building_name'];
                            $eUnits = $row['units'];
                            $eFloors = $row['floors'];
                            $eCapacity = $row['capacity'];
                            $eLocation = $row['location'];
                            $ePic1 = $row['pic1'];
                            $ePic2 = $row['pic2'];
                            $ePic3 = $row['pic3'];
                            $ePic4 = $row['pic4'];
                            $ePic5 = $row['pic5'];
                            $ePic6 = $row['pic6'];
                            $ePic7 = $row['pic7'];
                            $ePic8 = $row['pic8'];
                            $ePic9 = $row['pic9'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $eBuildingName;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <?php
                                            $y = 9;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/elevator_projects/<?php echo 'premier' . $x . '.png';?>" alt="Primier Vima Inc." style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></br> 
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                    <!--End of Modal 5-->

                    <!-- The Modal 6-->
                    <div class="modal fade" id="myModal6">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects where id = '6'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $eID = $row['id'];
                            $eBuildingName = $row['building_name'];
                            $eUnits = $row['units'];
                            $eFloors = $row['floors'];
                            $eCapacity = $row['capacity'];
                            $eLocation = $row['location'];
                            $ePic1 = $row['pic1'];
                            $ePic2 = $row['pic2'];
                            $ePic3 = $row['pic3'];
                            $ePic4 = $row['pic4'];
                            $ePic5 = $row['pic5'];
                            $ePic6 = $row['pic6'];
                            $ePic7 = $row['pic7'];
                            $ePic8 = $row['pic8'];
                            $ePic9 = $row['pic9'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $eBuildingName;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <?php
                                            $y = 9;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/elevator_projects/<?php echo 'blulane' . $x . '.png';?>" alt="The Blulane Hotel" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></br> 
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                    <!--End of Modal 6-->

                    <!-- The Modal 7-->
                    <div class="modal fade" id="myModal7">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects where id = '7'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $eID = $row['id'];
                            $eBuildingName = $row['building_name'];
                            $eUnits = $row['units'];
                            $eFloors = $row['floors'];
                            $eCapacity = $row['capacity'];
                            $eLocation = $row['location'];
                            $ePic1 = $row['pic1'];
                            $ePic2 = $row['pic2'];
                            $ePic3 = $row['pic3'];
                            $ePic4 = $row['pic4'];
                            $ePic5 = $row['pic5'];
                            $ePic6 = $row['pic6'];
                            $ePic7 = $row['pic7'];
                            $ePic8 = $row['pic8'];
                            $ePic9 = $row['pic9'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $eBuildingName;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <?php
                                            $y = 9;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/elevator_projects/<?php echo 'gliese' . $x . '.png';?>" alt="Gliese Premier Properties Inc." style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></br> 
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                    <!--End of Modal 7-->

                    <!-- The Modal 8-->
                    <div class="modal fade" id="myModal8">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects where id = '8'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $eID = $row['id'];
                            $eBuildingName = $row['building_name'];
                            $eUnits = $row['units'];
                            $eFloors = $row['floors'];
                            $eCapacity = $row['capacity'];
                            $eLocation = $row['location'];
                            $ePic1 = $row['pic1'];
                            $ePic2 = $row['pic2'];
                            $ePic3 = $row['pic3'];
                            $ePic4 = $row['pic4'];
                            $ePic5 = $row['pic5'];
                            $ePic6 = $row['pic6'];
                            $ePic7 = $row['pic7'];
                            $ePic8 = $row['pic8'];
                            $ePic9 = $row['pic9'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $eBuildingName;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 9;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/elevator_projects/<?php echo 'grace' . $x . '.png';?>" alt="Grace Atlanta One Condominium" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></br> 
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <!--End of Modal 8-->

                     <!-- The Modal 9-->
                     <div class="modal fade" id="myModal9">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects where id = '9'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $eID = $row['id'];
                            $eBuildingName = $row['building_name'];
                            $eUnits = $row['units'];
                            $eFloors = $row['floors'];
                            $eCapacity = $row['capacity'];
                            $eLocation = $row['location'];
                            $ePic1 = $row['pic1'];
                            $ePic2 = $row['pic2'];
                            $ePic3 = $row['pic3'];
                            $ePic4 = $row['pic4'];
                            $ePic5 = $row['pic5'];
                            $ePic6 = $row['pic6'];
                            $ePic7 = $row['pic7'];
                            $ePic8 = $row['pic8'];
                            $ePic9 = $row['pic9'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $eBuildingName;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 9;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/elevator_projects/<?php echo 'techno' . $x . '.png';?>" alt="Techno Plaza One" style="width:100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></br> 
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <!--End of Modal 9-->

                </div>
                <!--End of Modal Container-->

            </div><br>
            <div class="container">
                <div class='jumbotron'>
                    <h1 class='text-center'><b>Elevator Finished Projects in Taiwan</b></h1>
                </div>
                <div class="row">
                    <?php
                        include 'conn.php';
                        $sql = "select * from elevator_projects_taiwan";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            ?>
                            <div class="table-responsive">
                            <table class="table table-hover table-sm">
                                <thead class="text-center">
                                    <tr class="text-info">
                                        <th>NO.</th>
                                        <th>CLIENT</th>
                                        <th>LOCATION</th>
                                        <th>FLOORS</th>
                                        <th>CAPACITY</th>
                                    </tr>
                                </thead>
                            <?php
                            while($row = $result->fetch_assoc()){
                                $tID = $row['id'];
                                $tBuildingName = $row['building_name'];
                                $tLocation = $row['location'];
                                $tFloors = $row['floors'];
                                $tCapacity = $row['capacity'];
                                ?>
                                <tbody>
                                    <tr class="text-dark">
                                        <td><?php echo $tID?></td>
                                        <td><?php echo $tBuildingName?></td>
                                        <td><?php echo $tLocation?></td>
                                        <td><?php echo $tFloors?></td>
                                        <td><?php echo $tCapacity?></td>
                                    </tr>
                                </tbody>
                                <?php        
                            }
                            ?>
                            </table>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <div class='jumbotron'>
                    <h1 class='text-center'><b>KODER FINISHED OVER 500 ELEVATOR PROJECTS IN TAIWAN!</b></h1>
                </div>
            </div>
        </main>
    </div>

    <?php 
    include_once('footer.php');
    ?>   
</body>
</html>