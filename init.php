
<?php 
    //Import the config file for db connection
    include_once('config.php');
    //create a query to create user table
    $Query= 'CREATE TABLE users (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255),
        password VARCHAR(255)
    )';

    //create a query to create messages
    $Query1= "CREATE TABLE messages(
        content TEXT,
        sent_at TIMESTAMP
    )";

    //gets the results of the query
    $Result = mysqli_query($conn, $Query);
    $Result1 = mysqli_query($conn, $Query1);
    
    echo $Result1;
    echo $Result;
?>