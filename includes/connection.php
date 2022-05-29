<?php
$servername = "bxlqioeaf2nxdeugfemn-mysql.services.clever-cloud.com";
$username = "uhnbcyoa0gynhczg";
$password = "QoD888qNbDN812WfCndP";
$dbname = "bxlqioeaf2nxdeugfemn";


//FOR RUNNING ON LOCAL HOST
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "cars_engage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
