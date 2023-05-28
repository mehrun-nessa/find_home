<?php
include("connect.php");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $bed = $_POST['bed'];
    $bath = $_POST['bath'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $address = $_POST['address'];
    $owner = $_POST['owner'];
    
    $sql="insert into property (name,location,type,city,country,beds,baths,area,price,address,owner) values ('$name','$location','$type','$city','$country','$bed','$bath','$area','$price','$address','$owner')";

    if (mysqli_query($con,$sql)) 

    {
        header('Location: property-list.php');
    }
    
    else 
    {

        echo "Have Some Problem Please Try again";

    }

}

?>