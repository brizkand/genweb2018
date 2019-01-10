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
    <script src="node_modules/bootstrap/scss/bootstrap.css"></script>
    <script>
        $(document).ready(function(){
            /*
            $('#search').on('keyup', function(){
                var value = $(this).val().toUpperCase();
                $.post("ceiling_fan_inventory_search.php",{searchClient: value},function(result){
                    $("#dataContainer").html(result);
                });
		    }); 
            */
            $('.satData').on('click', function(){
			    var value = $(this).val();
                $.post('satellite_products_container.php',{clickSatData: value},function(result){
                    $("#productsContainer").html(result);
                });
			});
            //$('#productsContainer').load('satellite_products_container.php');
        });
    </script>
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <div id="app" class='container-fluid'>
        <main class="py-4">
            <div class='container'>
                <div class='jumbotron'>
                    <h1 class='text-center'><b>Satellite Products</b></h1>
                </div>
                <div class="row">
                    <div class="col-sm-3 mb-2">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title text-center">GSat Satellite</h4>
                                <button class="mb-1 btn btn-primary satData" value="1">Platinum Package</button>
                                <button class="mb-1 btn btn btn-primary satData" value="2">Executive Package</button>
                                <button class="mb-1 btn btn btn-primary satData" value="3">Family Package</button>
                                <button class="mb-1 btn btn btn-primary satData" value="4">GSAT Pinoy Package</button>    
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title text-center">IPTV Package</h4>
                                <button class="mb-1 btn btn btn-primary satData" value="5">Internet Protocol Telivision</button>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title text-center">iGSat Satellite</h4>
                                <button class="mb-1 btn btn btn-primary satData" value="6">iGSAT</button>
                                <button class="mb-1 btn btn btn-primary satData" value="7">Bandwith Controller</button>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title text-center">MATV/CATV</h4>
                                <button class="mb-1 btn btn btn-primary satData" value="8">Satellite Cable System</button>
                            </div>
                        </div>

                        <div class="card mb-2 bg-secondary text-white">
                            <div class="card-body">
                                <h4 class="card-title">Partners</h4>
                                <ul>
                                    <li>Global Satellite</li>
                                    <li>Pacific Satellite TV</li>
                                    <li>Amity Satellite, Inc.</li>
                                    <li>Ricklee Enterprise</li>
                                    <li>CBN</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="card" id="productsContainer">
                            <?php
                                include 'conn.php';
                                $sql = "select * from gsat_satellite_products where id ='1'";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                    $row = $result->fetch_assoc();
                                    $satID = $row['id'];
                                    $satTitle = $row['title'];
                                    $satDescription = $row['description'];
                                    $satInfo = $row['product_info'];
                                    $satImage = $row['image'];
                                    ?>
                                    <div class="card bg-info text-white">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h1 class="card-title"><b>Package Information</b></h1>
                                                </div>
                                                <div class="col-sm-3">
                                                    <img src="storage\genserv_products\satellite_products\<?php echo $satImage;?>" alt="<?php echo $satTitle;?>" style="width:100%">
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="container-fluid">
                                                        <h2 class="card-title"><?php echo $satTitle;?></h2>
                                                        <p class="card-text"><?php echo  $satDescription?></p>
                                                        <?php echo $satInfo;?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                    <h2 class="text-center">Platinum Package Channel List</h2>
                                </div>
                                <?php           
                                $sql = "select * from gsat_channel_line_up";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                    $chanID = $row['id'];
                                    $chanImage = $row['image'];
                                    $chanChannel = $row['channel'];
                                    $chanChannelLocation = $row['channel_location'];
                                    ?>   
                                    <div class="col-sm-3">
                                        <div class="card  mb-2">
                                            <div class="card-body">
                                                <img class="card-img-top" src="storage/gsat_channels/<?php echo $chanImage;?>" alt="IGSAT CHANNEL LOGO" style="width:100%">
                                                <p class="card-title text-dark"><b><?php echo $chanChannel;?></b></p>
                                                <small class="card-text text-dark"><?php echo $chanChannelLocation;?></small>
                                            </div>
                                        </div>
                                    </div>    
                                    <?php
                                    }
                                }
                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                            ?>
                            

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
