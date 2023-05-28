<?php
include 'header.php';
?>


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Contact Us</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            
                            <li class="breadcrumb-item text-body active" aria-current="page">Contact</li>
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
                    <h1 class="mb-3">Contact Us</h1>
                    
                </div>
                    <section class="contact" id="contact">

                       
                    <div class="icons-container">
                        
                            <div class="icons">
                                <img src="img/icon-1.png" alt="">
                                <h3>Phone Number</h3>
                                <p>01716677897</p>
                                <p>01823646748</p>
                            </div>
                        
                            <div class="icons">
                                <img src="img/icon-2.png" alt="">
                                <h3>Email Address</h3>
                                <p>momtahinabushra@gmail.com</p>
                                <p>mehrunmim@gmail.com</p>
                            </div>
                        
                                <div class="icons">
                                <img src="img/icon-3.png" alt="">
                                <h3>Office Address</h3>
                                <p>Plot # 125/A, Block- A, Level-1, Bashundhara RA, Dhaka - 1229.</p>
                            </div>
                        
                        </div>
                        
                        <div class="row">
                        
                            <form>
                                <div class="inputBox">
                                    <input type="text" id="name" placeholder="Name">
                                    <input type="number" id="number" placeholder="Number">
                                </div>
                                <div class="inputBox">
                                    <input type="email" id="email" placeholder="Email">
                                    <input type="text" id="subject" placeholder="Subject">
                                </div>
                                <textarea name="" placeholder="Message" id="message" cols="30" rows="10"></textarea>
                                <button type="button" class="btn btn-primary py-3 px-3 me-3 animated fadeIn" onclick="add()">Send</button>
                                
                            </form>
                        
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.891130940779!2d90.38838691429692!3d23.75126139466185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bcd681372b%3A0x5c2b8755e4327004!2sBashundhara%20City%20Shopping%20Complex!5e0!3m2!1sen!2sbd!4v1661071622782!5m2!1sen!2sbd"
                            width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                        </div>
                        
                        </section>
                    
                    </div>
        </div>

        <!--Contact list end-->

        


        <!-- Footer Start -->
        <?php
        include 'footer.php';
        ?> 
        <!-- Footer End -->

<script>
function add() {

var name=$('#name').val();
var number=$('#number').val();
var email=$('#email').val();
var subject=$('#subject').val();
var message=$('#message').val();

console.log(name);
console.log(number);
console.log(email);
console.log(subject);
console.log(message);

$.ajax({
url:"insert.php",
type:'post',
data:{
    name:name,
    number:number,
    email:email,
    subject:subject,
    message:message,
},
success:function(data,status) {

    console.log(status);

//$('#addModal').modal("hide");
window.location = "index.php";
//$('#addModal').modal("hide");
//$('#addModal').modal("hide");
}
});
}
    </script>


    