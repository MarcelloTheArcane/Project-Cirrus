<?php
$servername = "cirrus.cazdizvhsu30.eu-west-1.rds.amazonaws.com";
$username = "travis";
$password = "wp9sqxj97";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {

    die("Connection failed: " . mysqli_error($conn));

}else{
        echo "connected successfully";

}


?>
