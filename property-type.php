<?php
include("header.php");

$sqlCommercial = "SELECT COUNT(*) AS commercial_count FROM property WHERE type = 'Commercial'";
$resultCommercial = mysqli_query($con, $sqlCommercial);
$rowCommercial = mysqli_fetch_assoc($resultCommercial);
$commercialCount = $rowCommercial['commercial_count'];

$sqlResidential = "SELECT COUNT(*) AS residential_count FROM property WHERE type = 'Residential'";
$resultResidential = mysqli_query($con, $sqlResidential);
$rowResidential = mysqli_fetch_assoc($resultResidential);
$residentialCount = $rowResidential['residential_count'];

?>

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Property Type</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="property-list.php">Property</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Property Type</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->
        
        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Property Types</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-commercial.png" alt="Icon">
                                </div>
                                <h6>Commercial</h6>
                                <span><?php echo $commercialCount; ?> </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-residential.png" alt="Icon">
                                </div>
                                <h6>Residential</h6>
                                <span> <?php echo $residentialCount; ?> </span>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Category End -->
        

        <!-- Footer Start -->
        <?php include("footer.php");?>
        <!-- Footer End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>