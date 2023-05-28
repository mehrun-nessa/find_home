<?php
    include("connect.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userId = $_POST['userid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dob = $_POST['date_of_birth'];
        $occupation = $_POST['occupation'];
        $gender = $_POST['gender'];
        $nationality = $_POST['nationality'];
        $cell = $_POST['phone_number'];
        $address = $_POST['address'];
        $licenseNo = $_POST['licence'];
        $nid = $_POST['nid'];


        $sql = "UPDATE user SET
            name = '$name',
            email = '$email',
            pass = '$password',
            dob = '$dob',
            occupation = '$occupation',
            gender = '$gender',
            nationality = '$nationality',
            cell = '$cell',
            address = '$address',
            licenseno = '$licenseNo',
            nid = '$nid'
            WHERE id = '$userId'";

        if (mysqli_query($con, $sql)) {
            echo "User updated successfully.";
            echo '<script>window.location="profile.php"</script>';
        } else {
            echo "Error updating user: " . mysqli_error($con);
        }
    }
?>
