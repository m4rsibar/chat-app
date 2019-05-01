<?php 
    //import db connection($conn)
    include_once('config.php');
    //grab variables sent to route
    $username=  $_POST['username'];
    $password= $_POST['password'];

    $query= "INSERT INTO users(username,password) VALUES('".$username."', '".$password."')";

    //executes the query in the db.
    $Result = mysqli_query($conn, $query);

    echo $Result;
?>