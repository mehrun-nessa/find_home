<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="Select * from user where email='$email' and pass='$password'";
    $result=mysqli_query($con,$sql);

    if ($result) {

      $num=mysqli_num_rows($result);
      if ($num>0) {
        session_start();
        $_SESSION["email"]=$email;
        setcookie("email", $email, time() + (86400 * 30)); 
        setcookie("password",$password, time() + (86400 * 30));
        header('location:index.php');
      }
	  

      else {
		
        echo '<div class="text-center" style="color: rgb(77, 20, 135);">Invalid email address or password</div>';

        }


}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="logincss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<div class="container mt-4 col-5">
    <div class="col-12 mb-2 ">
        <h3 class="mb-4 mt-4 text-center" style="color: rgb(8, 72, 89);">Login</h3>
    </div>
    <body data-gr-c-s-loaded="true">
        <div class="container mt-4">
        <form method="POST" class="form-signin">
            
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control mb-4" placeholder="Email Address" autofocus="" />
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control mb-4" placeholder="Password" />
            <br> 
            <button type="submit" name="login" class="btn btn-primary btn-md" style="background-color:#D3C791; border:none; color:black;">Log In</button>
            <div class="text-center fs-6"> <a href="">Forget password?</a> or <a href="signup.php">Sign up</a> </div>
        </form>
        </div>
        <style>
            body {
                background-color: ##f2f2f8;
                color: #1d1b1b;
                
            }
        </style>
    </body>
</div>
</html>