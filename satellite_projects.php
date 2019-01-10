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
                    <h1 class='text-center'><b>MATV Finished Projects</b></h1>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/matv_projects/sunlight1.png" alt="SUNLIGHT ECO TOURISM ISLAND RESORT MATV" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Sunlight Eco Tourism Island Resort MATV</h2>
                                <p class="card-text"><address>Culion, Naglayan Island, Palawan</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/matv_projects/blulane1.png" alt="THE BLULANE HOTEL MATV" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">The Blulane Hotel MATV</h2>
                                <p class="card-text"><address>Tomas Mapua St. CorOngpin St. Binondo Manila</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/matv_projects/kinpo1.png" alt="KINPO ELECTRONICS INC. MATV" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Kinpo Electronics Inc. MATV</h2>
                                <p class="card-text"><address>Santo Tomas, Batangas</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/matv_projects/dgmc1.png" alt="DEVINE GRACE MEDICAL CENTER MATV" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Divine Grace Medical Center MATV</h2>
                                <p class="card-text"><address>Antero Soriano Hwy, General Trias, Cavite</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/matv_projects/steven1.png" alt="MR. STEVEN MATV" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Mr. Steven MATV</h2>
                                <p class="card-text"><address>Fontana Clark, Pampanga</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Click here to see images</a>
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
                        $sql = "select * from satellite_projects where id = '1'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $mID = $row['id'];
                            $mClient = $row['client'];
                            $mLocation = $row['location'];
                            $mPic1 = $row['pic1'];
                            $mPic2 = $row['pic2'];
                            $mPic3 = $row['pic3'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $mClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 3;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/matv_projects/<?php echo 'sunlight' . $x . '.png';?>" alt="SUNLIGHT ECO TOURISM ISLAND RESORT MATV" style="width:100%">
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
                        $sql = "select * from satellite_projects where id = '2'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $mID = $row['id'];
                            $mClient = $row['client'];
                            $mLocation = $row['location'];
                            $mPic1 = $row['pic1'];
                            $mPic2 = $row['pic2'];
                            $mPic3 = $row['pic3'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $mClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 3;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/matv_projects/<?php echo 'blulane' . $x . '.png';?>" alt="THE BLULANE HOTEL MATV" style="width:100%">
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
                        $sql = "select * from satellite_projects where id = '3'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $mID = $row['id'];
                            $mClient = $row['client'];
                            $mLocation = $row['location'];
                            $mPic1 = $row['pic1'];
                            $mPic2 = $row['pic2'];
                            $mPic3 = $row['pic3'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $mClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 3;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/matv_projects/<?php echo 'kinpo' . $x . '.png';?>" alt="KINPO ELECTRONICS INC. MATV" style="width:100%">
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
                        $sql = "select * from satellite_projects where id = '4'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $mID = $row['id'];
                            $mClient = $row['client'];
                            $mLocation = $row['location'];
                            $mPic1 = $row['pic1'];
                            $mPic2 = $row['pic2'];
                            $mPic3 = $row['pic3'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $mClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 3;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/matv_projects/<?php echo 'dgmc' . $x . '.png';?>" alt="DEVINE GRACE MEDICAL CENTER MATV" style="width:100%">
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
                        $sql = "select * from satellite_projects where id = '5'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $mID = $row['id'];
                            $mClient = $row['client'];
                            $mLocation = $row['location'];
                            $mPic1 = $row['pic1'];
                            $mPic2 = $row['pic2'];
                            $mPic3 = $row['pic3'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $mClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 3;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/matv_projects/<?php echo 'steven' . $x . '.png';?>" alt="SUNLIGHT ECO TOURISM ISLAND RESORT MATV" style="width:100%">
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
                </div>
                <!--End of Modal Container-->

            </div>
        </main>
    </div>

    <?php 
    include_once('footer.php');
    ?>   
</body>
</html>