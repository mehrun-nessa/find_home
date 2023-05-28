<?php
include 'session.php';
if ($type!='Seller') {
    echo '<script>window.location="index.php"</script>';
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
        <form action="insertproperty.php" method="post" class="form-horizontal">
            <div class="row">
                <div class="col-12 mb-2 ">
                    <h3 class="mb-4 mt-4 text-center" style="color: rgb(8, 72, 89);">Add Property</h3>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-4"><b>Property Name</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="name" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b>Property Type</b></label>
                <div class="col-8">
                    <select class="form-control" name="type" required>
                        <option value="">Select the type of the Property</option>
                        <option value="Commercial"> Commercial</option>
                        <option value="Residential"> Residential</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b>Location</b></label>
                <div class="col-8">
                    <select class="form-control" name="location" required>
                        <option value="">Select Area</option>
                        <option value="Mirpur"> Mirpur</option>
                        <option value="Uttara"> Uttara</option>
                        <option value="Bashundhara"> Bashundhara</option>
                        <option value="Gulshan"> Gulshan</option>
                        <option value="Banani"> Banani</option>
                        <option value="Shantinagar"> Shantinagar</option>
                        <option value="Kalshi"> Kalshi</option>
                        <option value="Jatrabari"> Jatrabari</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b>City</b></label>
                <div class="col-8">
                    <select class="form-control" name="city" required>
                        <option value="">Select City</option>
                        <option value="Dhaka"> Dhaka</option>
                        <option value="Rajshahi"> Rajshahi</option>
                        <option value="Sylhet"> Sylhet</option>
                        <option value="Mymensingh"> Mymensingh</option>
                        <option value="Chittagong"> Chittagong</option>
                        <option value="Dinajpur"> Dinajpur</option>
                        <option value="Khulna"> Khulna</option>
                        <option value="Barisal"> Barisal</option>
                        <option value="Bhola"> Bhola</option>
                        <option value="Kumilla"> Kumilla</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b>Country</b></label>
                <div class="col-8">
                    <select class="form-control" name="country" required>
                        <option value="">Select Country</option>
                        <option value="Bangladesh"> Bangladesh</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-form-label col-4"><b>Number of Beds</b></label>
                <div class="col-8">
                    <select class="form-control" name="bed" required>
                        <option value="">Select Number of beds</option>
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="4"> 4</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b>Number of Baths</b></label>
                <div class="col-8">
                    <select class="form-control" name="bath" required>
                        <option value="">Select Number of baths</option>
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"> <b>Area Size (in Sqft)</b> </label>
                <div class="col-8">
                    <input type="text" class="form-control" name="area" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"> <b> Price</b> </label>
                <div class="col-8">
                    <input type="text" class="form-control" name="price" required="required">
                </div>
            </div>
            
            
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Address</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="address" required="required">
                </div>
            </div>
            <input type="hidden" class="form-control" name="owner" value="<?php echo $userid ?>" >
            <div class="form-group row">
                <div class="col-8 offset-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Add New Property">
                </div>
            </div>
        </form>
    </div>
</body>
</html>