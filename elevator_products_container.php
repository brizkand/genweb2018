<?php
    if(!empty($_POST['clickSatData'])){
        include 'conn.php';
        $elevInfo = $_POST['clickSatData'];
        $sql = "select * from elevator_products where id ='$elevInfo'";
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
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <h1 class="card-title"><b>Package Information</b></h1>
                        </div>
                        <div class="col-sm-3">
                            <img class="rounded" src="storage\genserv_products\elevator_products\<?php echo $satImage;?>" alt="<?php echo $satTitle;?>" style="width:100%">
                        </div>
                        <div class="col-sm-9">
                            <div class="container-fluid mb-3">
                                <h2 class="card-title"><?php echo $satTitle;?></h2>
                                <p class="card-text"><?php echo  $satDescription?></p>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <?php
                                        if($satID == 1){
                                            ?>
                                            <div class="col-sm-12">
                                                <h2>Passenger Elevator Designs</h2>
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/pe1.png" alt="PE1" style="width:100%">
                                                        <p class="card-title text-dark"><b>PE-01</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/pe2.png" alt="PE2" style="width:100%">
                                                        <p class="card-title text-dark"><b>PE-02</b></p>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-sm-3">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/pe3.png" alt="PE3" style="width:100%">
                                                        <p class="card-title text-dark"><b>PE-03</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <?php echo $satInfo;?>
                                            </div>     
                                        <?php
                                        }
                                    ?>

                                    <?php
                                        if($satID == 2){
                                            ?>
                                            <div class="col-sm-12">
                                                <h2>Freight Elevator Designs</h2>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/freight_elevator_1.png" alt="freight_elevator_1" style="width:100%">
                                                        <ul class="card-title text-dark">
                                                            <li><b>Opening Type: </b>2-door leaf, side opening door(2S)</li>
                                                            <li><b>Door Jamb: </b>Standard type (hairline S/S)<br>Splay type (additional price of option)</li>
                                                            <li><b>Door Leaf: </b>Paint coating steel sheet, hairline S/S (additional price of option)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/freight_elevator_2.png" alt="freight_elevator_2" style="width:100%">
                                                        <ul class="card-title text-dark">
                                                            <li><b>Opening Type: </b>3-door leaf (3S)</li>
                                                            <li><b>Door Jamb: </b>Standard type (hairline S/S)<br>Splay type (additional price of option)</li>
                                                            <li><b>Door Leaf: </b>Paint coating steel sheet, hairline S/S (additional price of option)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/freight_elevator_3.png" alt="freight_elevator_3" style="width:100%">
                                                        <ul class="card-title text-dark">
                                                            <li><b>Opening Type: </b>4-door leaf, center opening door (2CO)</li>
                                                            <li><b>Door Jamb: </b>Standard type (hairline S/S)<br>Splay type (additional price of option)</li>
                                                            <li><b>Door Leaf: </b>Paint coating steel sheet, hairline S/S (additional price of option)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/freight_elevator_4.png" alt="freight_elevator_4" style="width:100%">
                                                        <ul class="card-title text-dark">
                                                            <li><b>Opening Type: </b>Manual Folding Gate</li>
                                                            <li><b>Door Jamb: </b>Standard type (hairline S/S)<br>Splay type (additional price of option)</li>
                                                            <li><b>Door Leaf: </b>Paint coating steel sheet, hairline S/S (additional price of option)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                        <?php
                                        }
                                    ?>

                                    <?php
                                        if($satID == 3){
                                            ?>
                                            <div class="col-sm-12">
                                                <h2>Observation Elevator Designs</h2>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/observation_elevator_1.png" alt="observation_elevator_1" style="width:100%">
                                                        <p class="card-text text-dark">Car with equipment</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/observation_elevator_2.png" alt="observation_elevator_2" style="width:100%">
                                                        <p class="card-text text-dark">Car with equipment</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/observation_elevator_3.png" alt="observation_elevator_3" style="width:100%">
                                                        <p class="card-text text-dark">2-door leaf, one way side opening door with control panel.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/observation_elevator_4.png" alt="observation_elevator_4" style="width:100%">
                                                        <p class="card-text text-dark">2-door leaf, center opening door with control panel.</p>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                        <?php
                                        }
                                    ?>
                                    
                                    <?php
                                        if($satID == 4){
                                            ?>
                                            <div class="col-sm-12">
                                                <h2>Home Elevator Designs</h2>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/home_elevator_1.png" alt="home_elevator_1" style="width:100%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/home_elevator_2.png" alt="home_elevator_2" style="width:100%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/home_elevator_3.png" alt="home_elevator_3" style="width:100%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/home_elevator_4.png" alt="home_elevator_4" style="width:100%">
                                                    </div>
                                                </div>
                                            </div>
                                                
                                        <?php
                                        }
                                    ?>

                                    <?php
                                        if($satID == 5){
                                            ?>
                                            <div class="col-sm-12">
                                                <h2>Hospital Elevator Designs</h2>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/hospital_elevator_1.png" alt="hospital_elevator_1" style="width:100%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/hospital_elevator_2.png" alt="hospital_elevator_2" style="width:100%">
                                                    </div>
                                                </div>
                                            </div>        
                                        <?php
                                        }
                                    ?>

                                    <?php
                                        if($satID == 6){
                                            ?>    
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-403.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-403</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-404.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-404</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-405.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-405</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-406.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-406</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-407.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-407</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-408.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-408</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-409.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-409</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-410.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-410</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-413.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-413</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-7102.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-7102</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-7111.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-7111</b></p>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py-7112.png" alt="Elevator Car Ceiling" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-7112</b></p>
                                                    </div>
                                                </div>
                                            </div>      
                                        <?php
                                        }
                                    ?>

                                    <?php
                                        if($satID == 7){
                                            ?>    
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py_301.png" alt="Elevator Door Entrance" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-301</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py_302.png" alt="Elevator Door Entrance" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-302</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py_303.png" alt="Elevator Door Entrance" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-303</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py_304.png" alt="Elevator Door Entrance" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-304</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py_305.png" alt="Elevator Door Entrance" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-305</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card  mb-2">
                                                    <div class="card-body">
                                                        <img class="card-img-top" src="storage/genserv_products/elevator_products/py_306.png" alt="Elevator Door Entrance" style="width:100%">
                                                        <p class="card-text text-center text-dark"><b>PY-306</b></p>
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
                </div>
            </div>
        <?php
        }
    }
    else{
        echo "no data!";
    }
?>