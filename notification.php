<?php

include("connect.php");

extract($_POST);

$status=0;

if (isset($_POST['id'])) {
    
    $query = "SELECT * FROM contact WHERE id='$id'";
    $result3 = mysqli_query($con, $query);
    $row3 = mysqli_fetch_array($result3);
    // $sql="insert into contact (name,number,email,subject,message,status) values ('$name','$number','$email','$subject','$message','$status')";
    // $result=mysqli_query($con,$sql);
}

?>

<?php
    include 'header.php';
?> 


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Notification</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            
                            <li class="breadcrumb-item text-body active" aria-current="page">Notification</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        
        <!-- Contact List start -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Notification Details</h1>
                    
                </div>
                    <section class="contact" id="contact">

                        
                        <div class="icons-container">
                        
                            <div class="icons">
                            <table style="width:100%">
                                <tr>
                                    <th>Name:</th>
                                    <td><?php echo $row3["name"]; ?></td>
                                </tr>
                                <tr>
                                    <th>Number:</th>
                                    <td><?php echo $row3["number"]; ?></td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td><?php echo $row3["email"]; ?></td>
                                </tr>
                                <tr>
                                    <th>Subject:</th>
                                    <td><?php echo $row3["subject"]; ?></td>
                                </tr>
                                <tr>
                                    <th>Message:</th>
                                    <td><?php echo $row3["message"]; ?></td>
                                </tr>
                            </table>

                            </div>
                        
                           
                        
                        </div>
                        
                        
                        </section>
                    
                    </div>
        </div>


        


        <!-- Footer Start -->
        <?php
        include 'footer.php';
        ?> 
        <!-- Footer End -->



    