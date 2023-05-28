<?php
include 'connect.php';

if(isset($_POST['property_id'])){
    $propertyId = $_POST['property_id'];

    $sql = "DELETE FROM `property` WHERE id = '$propertyId'";
    $result=mysqli_query($con,$sql);
    if ($result) {
        echo '<script>window.location="profile.php"</script>';
    }
    else {
        echo "Error";
    }
} 
else {
    echo "Property ID not provided.";
}
?>
