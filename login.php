<?php 
    include_once('config.php');

    $username=  $_POST['username'];
    $password= $_POST['password'];


    //create a query validates the user by checking username and password match
    $query= 
    "SELECT 
    username
    FROM
    users
    WHERE
    username='".$username."' AND password='".$password."' ";

    $result = mysqli_query($conn, $query);


    if(mysqli_fetch_assoc($result) ['username']){
        echo true;
    };

?>