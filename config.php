<?php

if (function_exists('xdebug_disable')) {
    xdebug_disable();
  }
  
    $username= "marschattapp";
    $password = "\$password123";
    $host = "den1.mysql5.gear.host";
    $db= "marschattapp";

    //connects to the db
    //save db connection for access in other files
    $conn=  mysqli_connect($host, $username, $password, $db)or die ('error connecting');

?>