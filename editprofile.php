<?php
include 'connect.php';
if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
    $sql="SELECT * FROM user WHERE id='$userid'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
            $userid=$row["id"];
            $uname=$row["name"];
            $uemail=$row["email"];
            $upass=$row["pass"];
            $udob=$row["dob"];
            $uoccupation=$row["occupation"];
            $ugender=$row["gender"];
            $unationality=$row["nationality"];
            $ucell=$row["cell"];
            $uaddress=$row["address"];
            $unid=$row["nid"];
            $ulicenseno=$row["licenseno"];
            $utype=$row["type"];

    }
} 
else 
{
    echo "ID Not Correct";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Update Profile Info</title>
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
        <form  method="post" action="updateprofile.php" class="form-horizontal">
            <div class="row">
                <div class="col-12 mb-2 ">
                    <h3 class="mb-4 mt-4 text-center" style="color: rgb(8, 72, 89);">Edit Information</h3>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-4"><b> Name</b></label>
                <div class="col-8">
                    <input type="hidden" class="form-control" name="userid" value="<?php echo $userid; ?>">
                    <input type="text" class="form-control" name="name" value="<?php echo $uname; ?>"required="required">
                    
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-form-label col-4"> <b> Email Address </b> </label>
                <div class="col-8">
                    <input type="email" class="form-control" name="email" value="<?php echo $uemail; ?>" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"> <b> Password</b> </label>
                <div class="col-8">
                    <input type="password" class="form-control" name="password" value="<?php echo $upass; ?>" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Confirm Password</b></label>
                <div class="col-8">
                    <input type="password" class="form-control" name="confirm_password" value="<?php echo $upass; ?>" required="required">
                </div>
            </div>
            

            <div class="form-group row">
                <label class="col-form-label col-4"><b> Date of Birth</b></label>
                <div class="col-8">
                    <input type="date" class="form-control" name="date_of_birth" value="<?php echo $udob; ?>" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Occupation</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="occupation" value="<?php echo $uoccupation; ?>" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b>Gender</b></label>
                <div class="col-8">
                <select class="form-control" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male"<?php if ($ugender == 'Male') echo ' selected'; ?>>Male</option>
                    <option value="Female"<?php if ($ugender == 'Female') echo ' selected'; ?>>Female</option>
                </select>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Nationality</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nationality" value="<?php echo $unationality; ?>" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Phone Number</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="phone_number" value="<?php echo $ucell; ?>"required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Address</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="address" value="<?php echo $uaddress; ?>" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Licence</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="licence" value="<?php echo $ulicenseno; ?>" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> NID</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nid" value="<?php echo $unid; ?>"required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8 offset-4">
                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                    
                </div>
            </div>
        </form>
    </div>
</body>
</html>