<?php
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $dob = $_POST['date_of_birth'];
    $occupation = $_POST['occupation'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $phoneNumber = $_POST['phone_number'];
    $address = $_POST['address'];
    $licenseNo = $_POST['licence'];
    $nid = $_POST['nid'];
    $type = $_POST['type'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="text-center" style="color: rgb(77, 20, 135);">Invalid email address</div>';
    }

    if ($password !== $confirmPassword) {
        echo '<div class="text-center" style="color: rgb(77, 20, 135);">Password and confirmed password do not match.</div>';
    }

    $emailExistsQuery = "SELECT * FROM user WHERE email = '$email'";
    $emailExistsResult = $con->query($emailExistsQuery);
    if ($emailExistsResult->num_rows > 0) {
            echo '<div class="text-center" style="color: rgb(77, 20, 135);">Email already exists.</div>';
        }

    else {
        $sql = "INSERT INTO user (name, email, pass, dob, occupation, gender, nationality, cell, address, licenseno, nid, type) VALUES ('$name', '$email', '$password', '$dob', '$occupation', '$gender', '$nationality', '$phoneNumber', '$address', '$licenseNo', '$nid', '$type')";
    
        if ($con->query($sql) === TRUE) {
            echo '<div class="text-center" style="color: rgb(77, 20, 135);">Registration successful.<a style="color: green;" href="login.php">Click Here For Login</a></div>';
        } else {
            echo "Error: " . $conn->error;
        }
    
        $con->close();
    }

    
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #291919;
            background: #eceef3;
            font-family: 'Roboto', sans-serif;
        }
        .form-control {
            border-color: rgb(73, 157, 230);
            min-height: 41px;
            box-shadow: none !important;
        }
        .form-control:focus {
            border-color: #5cd3b4;
        }
        .form-control,
        .btn {
            border-radius: 3px;
        }
        .signup-form {
            width: 500px;
            margin: 0 auto;
            padding: 30px 0;
        }
        .signup-form h2 {
            color: #030303;
            margin: 0 0 30px 0;
            display: inline-block;
            padding: 0 30px 10px 0;
            border-bottom: 3px solid #5cd3b4;
        }
        .signup-form form {
            color: #5d5656;
            border-radius: 4px;
            margin-bottom: 15px;
            background: whitesmoke;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;
            padding: 30px;
        }
        .signup-form .form-group row {
            margin-bottom: 20px;
        }
        .signup-form label {
            font-weight: normal;
            font-size: 15px;
            line-height: 2;
        }
        .signup-form input[type="checkbox"] {
            position: relative;
            top: 1px;
        }
        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #5cd3b4;
            border: none;
            margin-top: 20px;
            min-width: 140px;
        }
        .signup-form .btn:hover,
        .signup-form .btn:focus {
            background: #41cba9;
            outline: none !important;
        }
        .signup-form a {
            color: #5cd3b4;
            text-decoration: underline;
        }
        .signup-form a:hover {
            text-decoration: none;
        }
        .signup-form form a {
            color: #5cd3b4;
            text-decoration: none;
        }
        .signup-form form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-form">
        <form  method="post" class="form-horizontal">
            <div class="row">
                <div class="col-12 mb-2 ">
                    <h3 class="mb-4 mt-4 text-center" style="color: rgb(8, 72, 89);">Sign Up</h3>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-4"><b> Name</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="name" required="required">
                    
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-form-label col-4"> <b> Email Address </b> </label>
                <div class="col-8">
                    <input type="email" class="form-control" name="email" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"> <b> Password</b> </label>
                <div class="col-8">
                    <input type="password" class="form-control" name="password" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Confirm Password</b></label>
                <div class="col-8">
                    <input type="password" class="form-control" name="confirm_password" required="required">
                </div>
            </div>
            

            <div class="form-group row">
                <label class="col-form-label col-4"><b> Date of Birth</b></label>
                <div class="col-8">
                    <input type="date" class="form-control" name="date_of_birth" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Occupation</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="occupation" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b>Gender</b></label>
                <div class="col-8">
                    <select class="form-control" name="gender" required="required">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Nationality</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nationality" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Phone Number</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="phone_number" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Address</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="address" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Licence</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="licence" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> NID</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nid" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-4"><b>Type</b></label>
                <div class="col-8">
                    <select class="form-control" name="type" required="required">
                        <option value="">Select Type</option>
                        <option value="Buyer">Buyer</option>
                        <option value="Seller">Seller</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-8 offset-4">
                    <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                    
                </div>
            </div>

        </form>
        <div class="text-center" style="color: rgb(77, 20, 135);">Already have an account? <a style="color: green;" href="login.php">Login here</a></div>
    </div>
</body>
</html>