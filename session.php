<?php
include 'connect.php';
session_start();
$type="";
$homepageloginbutton ='<a href="signup.php" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">SIGNUP</a>
<a href="login.php" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">LOGIN</a>';
$notificationbutton="";
if(isset($_SESSION['email']))
        {
            $email=$_SESSION['email'];
            $sql="SELECT * FROM user WHERE email='$email'";
            $result=mysqli_query($con,$sql);


            while($row=mysqli_fetch_assoc($result)){
                    $userid=$row["id"];
                    $name=$row["name"];
                    $email=$row["email"];
                    $pass=$row["pass"];
                    $dob=$row["dob"];
                    $occupation=$row["occupation"];
                    $gender=$row["gender"];
                    $nationality=$row["nationality"];
                    $cell=$row["cell"];
                    $address=$row["address"];
                    $nid=$row["nid"];
                    $licenseno=$row["licenseno"];
                    $type=$row["type"];

                }

                if ($type=='Seller') {
                    $addPropertyButton='<a href="addproperty.php" class="nav-item nav-link">Addproperty</a>';
                    $notificationbutton='<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="label label-pill label-danger count" style="border-radius:10px; text-color:red;"></span> <span class="fas fa-bell" style="font-size:18px;"></span></a>
                    <div class="dropdown-menu2 rounded-0 m-0">
                    </div>
                    </div>';
                    $notificationscript='';
                }
                else {
                    $addPropertyButton="";
                    $notificationbutton="";
                }

        $homepageloginbutton="";

           
        $loginbutton='<div class="nav-item dropdown">
             <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
             <p class="fas fa-user"></p>
             '.$name.'</a>
            <div class="dropdown-menu rounded-0 m-0">
                <a href="profile.php" class="dropdown-item">Profile</a>
                <a href="logout.php" class="dropdown-item">Logout</a>
            </div>
            </div>';

        
        }

        

    else {
            
            $loginbutton='<a href="login.php" class="nav-item nav-link"><span class="fas fa-user" style="font-size:18px;"></span> Login</a>';
            $addPropertyButton="";
            
    }
?>