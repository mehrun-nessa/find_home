<?php
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $beds = $_POST['bed'];
    $baths = $_POST['bath'];
    $area = $_POST['size'];
    $price = $_POST['price'];
    $address = $_POST['address'];

    $sql = "UPDATE property SET name = '$name', location = '$location', type = '$type', city = '$city', country = '$country', beds = '$beds', baths = '$baths', area = '$area', price = '$price', address = '$address' WHERE id = '$id'";

    if (mysqli_query($con, $sql)) {
        echo '<script>window.location="profile.php"</script>';
    } else {
        echo "Error updating property: " . mysqli_error($con);
    }
}
?>
