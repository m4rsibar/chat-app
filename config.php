<?php 
    $username= "marschattapp";
    $password = "\$password123";
    $host = "den1.mysql5.gear.host";
    $db= "marschattapp";

    //connects to the db
    $conn=  mysqli_connect($host, $username, $password, $db)or die ('error connecting');

?>