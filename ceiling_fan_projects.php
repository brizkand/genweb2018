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
                            <a class="dropdown-item" href="genserv_location_map.php ">Our Location</a>
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
                    <h1 class='text-center'><b>Ceiling Fan Finished Projects</b></h1>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/ceiling_fan_projects/boss1.png" alt="CEILING FAN FINISHED PROJECTS" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Boss Crab Hotpot</h2>
                                <p class="card-text"><address>Makati City</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/ceiling_fan_projects/fsbh1.png" alt="CEILING FAN FINISHED PROJECTS" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">FSBH Corporation</h2>
                                <p class="card-text"><address>Caloocan City</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/ceiling_fan_projects/genserv1.png" alt="CEILING FAN FINISHED PROJECTS" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Genserv International Inc.</h2>
                                <p class="card-text"><address>Makati City</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/ceiling_fan_projects/oscopro1.png" alt="CEILING FAN FINISHED PROJECTS" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Oscopro Optical</h2>
                                <p class="card-text"><address>Mandaluyong City</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/ceiling_fan_projects/lourdes1.png" alt="CEILING FAN FINISHED PROJECTS" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Lourdes Hospital</h2>
                                <p class="card-text"><address>Mandaluyong City</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Click here to see images</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="/storage/ceiling_fan_projects/pacific1.png" alt="CEILING FAN FINISHED PROJECTS" style="width:100%">
                            <div class="card-body">
                                <h2 class="card-title">Pacific Satellite</h2>
                                <p class="card-text"><address>Malate City</address>
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">Click here to see images</a>
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
                        $sql = "select * from ceiling_fan_projects where id = '1'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $cID = $row['id'];
                            $cClient = $row['client'];
                            $cLocation = $row['address'];
                            $cPic1 = $row['pic1'];
                            $cPic2 = $row['pic2'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $cClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 2;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/ceiling_fan_projects/<?php echo 'boss' . $x . '.png';?>" alt="Boss Crab Hotpot Ceiling Fan" style="width:100%">
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
                        $sql = "select * from ceiling_fan_projects where id = '2'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $cID = $row['id'];
                            $cClient = $row['client'];
                            $cLocation = $row['address'];
                            $cPic1 = $row['pic1'];
                            $cPic2 = $row['pic2'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $cClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 2;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/ceiling_fan_projects/<?php echo 'fsbh' . $x . '.png';?>" alt="FSBH Corporation Ceiling Fan" style="width:100%">
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
                        $sql = "select * from ceiling_fan_projects where id = '3'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $cID = $row['id'];
                            $cClient = $row['client'];
                            $cLocation = $row['address'];
                            $cPic1 = $row['pic1'];
                            $cPic2 = $row['pic2'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $cClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 2;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/ceiling_fan_projects/<?php echo 'genserv' . $x . '.png';?>" alt="Genserv International Inc. Ceiling Fan" style="width:100%">
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
                        $sql = "select * from ceiling_fan_projects where id = '4'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $cID = $row['id'];
                            $cClient = $row['client'];
                            $cLocation = $row['address'];
                            $cPic1 = $row['pic1'];
                            $cPic2 = $row['pic2'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $cClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 2;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/ceiling_fan_projects/<?php echo 'oscopro' . $x . '.png';?>" alt="Oscopro Optical Ceiling Fan" style="width:100%">
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

                    <!-- The Modal 1-->
                    <div class="modal fade" id="myModal5">
                    <?php
                        include 'conn.php';
                        $sql = "select * from ceiling_fan_projects where id = '5'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $cID = $row['id'];
                            $cClient = $row['client'];
                            $cLocation = $row['address'];
                            $cPic1 = $row['pic1'];
                            $cPic2 = $row['pic2'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $cClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 2;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/ceiling_fan_projects/<?php echo 'lourdes' . $x . '.png';?>" alt="Lourdes Hospital Ceiling Fan" style="width:100%">
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

                    <!-- The Modal 1-->
                    <div class="modal fade" id="myModal6">
                    <?php
                        include 'conn.php';
                        $sql = "select * from ceiling_fan_projects where id = '6'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $cID = $row['id'];
                            $cClient = $row['client'];
                            $cLocation = $row['address'];
                            $cPic1 = $row['pic1'];
                            $cPic2 = $row['pic2'];
                        }
                    ?>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo $cClient;?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                            $y = 2;
                                            for($x = 1; $x <= $y; $x++){
                                        ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <img class="card-img-top" src="/storage/ceiling_fan_projects/<?php echo 'pacific' . $x . '.png';?>" alt="Pacific Satellite Ceiling Fan" style="width:100%">
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