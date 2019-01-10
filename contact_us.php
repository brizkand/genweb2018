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
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST["submit"])){
            $fn_val = $_POST['fn'];
            $ln_val = $_POST['ln'];
            $email_val = $_POST['email'];
            $title_val = $_POST['title'];
            $message_val = $_POST['message'];
            /*echo $fn_val;
            echo $ln_val;
            echo $email_val;
            echo $message_val;*/


            include_once "PHPMailer_5.2.0/class.phpmailer.php";
            include_once "PHPMailer_5.2.0/class.smtp.php";

            $to = array('kevin@genserv-ph.com');

            $mail = new PHPMailer();

            $mail->IsSMTP();
            $mail->Host = "genserv-ph.com";
            $mail->SMTPAuth = true;
            $mail->Username = "genservwebsite@genserv-ph.com";
            $mail->Password = "password@1";
            $mail->Port = 587;
            $mail->From = "kevin@genserv-ph.com";
            $mail->FromName = "NoReply";
            //$mail->AddAddress ("holgadokevin@gmail.com");
            foreach($to as $to_add){
                $mail->AddAddress($to_add);                  // name is optional
            }
            $mail->IsHTML(True);
            $mail->Subject = $title_val;
            $mail->Body = "I'm " . $fn_val . " " . $ln_val . " , and my email address is "
                . $email_val . " my message are " . $message_val;

                if(!$mail->Send()){
                    //echo "Message could not be sent!";
                    //echo "Mailer Error: " . $mail->ErrorInfo;
                    //exit;
                    ?>
                    <script>
                        $(document).ready(function(){
                            $("#myModal").modal("show");
                        });
                    </script>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">Message did not sent!</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                Sorry. Please try again later.
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    <?php
                }
                else{
                    //echo "Mail has been sent successfully!"; 
                    ?> 
                    <script>
                        $(document).ready(function(){
                            $("#myModal2").modal("show");
                        });
                    </script>
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal2">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">Message Sent!</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                Thank you for trusting Genserv International Inc. You will get a message soon and we will do our best to serve you. Thank you!
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>  
                <?php
                }
            }
        }
    ?>
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
                        <div class="dropdown-menu dropdown-menu-right active" aria-labelledby="navbarDropdown">
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
                    <h1 class='text-center'><b>Contact Us</b></h1>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Why it’s worth talking to <b>Genserv International Inc.</b></h1>
                        <p>There is no such thing as an average customer – and no room for average in the experience you deliver.</p>

                        <p>Today’s customer expects to co-create their own journey with you, on their terms.</p>

                        <p>With us, not by us – we’ll help you meet them there. Blending technology, insight and process to drive lasting value for your business, and those you serve.</p>

                        <p>Let us invest in your customers today, giving you the oxygen, the space, the runway to dream up what comes next.</p>
                        <h2><b>Genserv International Inc.</b> We’ll take care of today – empowering you to innovate for tomorrow.</h2>
                    </div>
                    <div class="col-sm-6 bg-dark p-4 rounded">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                            <h1 class="text-light text-center"><b>Get in Touch</b></h1>
                            <input type="text" class="form-control mb-4" name="fn" placeholder="First Name" required>
            
                            <input type="text" class="form-control mb-4" name="ln" placeholder="Last Name" required>
                            
                            <input type="email" class="form-control mb-4" name="email" placeholder="Email Address" required>

                            <input type="text" class="form-control mb-4" name="title" placeholder="Message Title" required>
                            
                            <textarea class="form-control mb-4" name="message" id="" cols="30" rows="10" placeholder="Enter Your Message Here...." required></textarea>
                            
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </form>
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
