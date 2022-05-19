<?php

// For Development Purpose
 $serverName = "localhost";
 $serverUser = "root";
 $serverPass = "";
 $dbName     = "CMS";

 $conn       = mysqli_connect($serverName, $serverUser, $serverPass, $dbName) or die("Err! Connection Failed!!" + mysqli_connect_error());

?>
