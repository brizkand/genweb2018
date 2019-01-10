<?php
    $server = "localhost";
    $user = "brizkand";
    $pword = "bevinishel05";
    $db = "genserv_website2018";
    
    $conn = new mysqli($server, $user, $pword, $db);
    if($conn->connect_error){
        die("Connection failed " . $conn->connect_error);
    }
	//echo("Connected successfully");
?>