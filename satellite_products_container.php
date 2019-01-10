<?php
    if(!empty($_POST['clickSatData'])){
        include 'conn.php';
        $satInfo = $_POST['clickSatData'];
        $sql = "select * from gsat_satellite_products where id ='$satInfo'";
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
                            <img class="rounded" src="storage\genserv_products\satellite_products\<?php echo $satImage;?>" alt="<?php echo $satTitle;?>" style="width:100%">
                        </div>
                        <div class="col-sm-9">
                            <div class="container-fluid">
                                <h2 class="card-title"><?php echo $satTitle;?></h2>
                                <p class="card-text"><?php echo  $satDescription?></p>
                                <?php echo $satInfo;?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                            if($satID == 1){
                                ?>
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
                            }
                        ?>

                        <?php
                            if($satID == 2){
                                ?>
                                <div class="col-sm-12">
                                    <h2 class="text-center">Executive Package Channel List</h2>
                                </div>
                                <?php           
                                $sql = "select * from gsat_channel_line_up where id not between 73 and 103";
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
                            }
                        ?>

                        <?php
                            if($satID == 3){
                                ?>
                                <div class="col-sm-12">
                                    <h2 class="text-center">Family Package Channel List</h2>
                                </div>
                                <?php           
                                $sql = "select * from gsat_channel_line_up where id not between 48 and 103";
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
                            }
                        ?>

                        <?php
                            if($satID == 4){
                                ?>
                                <div class="col-sm-12">
                                    <h2 class="text-center">G Pinoy Package Channel List</h2>
                                </div>
                                <?php           
                                $sql = "select * from gsat_channel_line_up where id not between 35 and 103";
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
                            }
                        ?>


                        <?php
                            if($satID == 8){
                                ?>
                                <div class="col-sm-12">
                                    <div class="card  mb-2">
                                        <div class="card-body">
                                            <p class="card-title text-dark"><b>CATV / MATV Cable System</b></p>
                                            <img class="card-img-top" src="storage/genserv_products/satellite_products/catv.png" alt="CATV Cable System" style="width:100%">
                                            <p class="card-text text-dark">Since the CATV network was primarily designed for downstream transmission of television signals, most of the existing network is being refitted to support two-way data transmissions. For example, amplifiers are used at various points along the cable to boost signals, but these amplifiers only work in one direction. Upgrading those components, along with many other components has been a big and expensive task. A temporary solution to provide two-way communications is the dual-path approach, in which subscribers transmit data upstream via a separate telephone connection. This scheme is being phased out as full two-way systems are put into place</p>
                                        </div>
                                    </div>
                                </div>
                            <?php    
                            }
                        ?>

                        
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