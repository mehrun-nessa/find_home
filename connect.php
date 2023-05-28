<?php 
//connect.php;
$con = mysqli_connect("localhost", "root", "", "findhome");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
