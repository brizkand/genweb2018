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
                $.post('floodgate_products_container.php',{clickSatData: value},function(result){
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
                    <h1 class='text-center'><b>Flood Gate Product</b></h1>
                </div>
                <div class="row">
                    <div class="col-sm-3 mb-2">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title text-center">Flood Gate Product</h4>
                                <button class="mb-1 btn btn-primary satData" value="1">Flood Gate</button>  
                            </div>
                        </div>

                        <div class="card mb-2 bg-secondary text-white">
                            <div class="card-body">
                                <h4 class="card-title">Partners</h4>
                                <ul>
                                    <li>Dai-Chen Watergate Technology</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="card" id="productsContainer">
                            <?php
                                include 'conn.php';
                                $sql = "select * from floodgate_products where id ='1'";
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
                                                <div class="col-sm-3">
                                                    <img src="storage\genserv_products\floodgate_products\<?php echo $satImage;?>" alt="<?php echo $satTitle;?>" style="width:100%">
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="container-fluid">
                                                        <h2 class="card-title"><?php echo $satTitle;?></h2>
                                                        <p class="card-text"><?php echo  $satDescription?></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <?php echo $satInfo;?>
                                                </div>
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
