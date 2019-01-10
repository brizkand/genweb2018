<?php
    if(!empty($_POST['clickSatData'])){
        include 'conn.php';
        $satInfo = $_POST['clickSatData'];
        $sql = "select * from industrial_and_security_products where id ='$satInfo'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $satID = $row['id'];
            $satTitle = $row['title'];
            $satDescription = $row['des'];
            $satInfo = $row['product_info'];
            $satImage = $row['image'];
            ?>
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="rounded" src="storage\genserv_products\industrial_and_security_products\<?php echo $satImage;?>" alt="<?php echo $satTitle;?>" style="width:100%">
                        </div>
                        <div class="col-sm-9">
                            <div class="container-fluid">
                                <h2 class="card-title"><?php echo $satTitle;?></h2>
                                <p class="card-text"><?php echo  $satDescription?></p>
                                <?php echo $satInfo;?>
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