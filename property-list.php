<?php
    include("header.php");
?>

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Property List</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Property List</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <form method="POST" action="">
                    <div class="row g-2">
                        <div class="col-md-3">
                            <select name="propertyType" class="form-select border-0 py-3">
                                <option selected>Property Types</option>
                                <option value="Residential">Residential</option>
                                <option value="Commercial">Commercial</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <select name="priceRange" class="form-select border-0 py-3">
                                <option selected>Price</option>
                                <option value="0-10000000">0-100,00000</option>
                                <option value="10000001-100000000">100,00001-1000,00000</option>
                                <option value="100000001-1000000000">1000,00001-100,00,00,00,000</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="location" class="form-select border-0 py-3">
                                <option selected>Location</option>
                                <option value="Mirpur">Mirpur</option>
                                <option value="Uttara">Uttara</option>
                                <option value="Bashundhara">Bashundhara</option>
                                <option value="Gulshan">Gulshan</option>
                                <option value="Banani">Banani</option>
                                <option value="Shantinagar">Shantinagar</option>
                                <option value="Kalshi">Kalshi</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-dark border-0 w-100 py-3">Search</button>
                        </div>
                    </div>

                    </div>
                </form>
            </div>
        </div>
        <!-- Search End -->



        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">List of Property</h1>
                            <h6>Flats or properties for sell in Dhaka</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">


                        <?php
                                $sql = "SELECT * FROM property WHERE 1 = 1";
                                
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                                    $propertyType = $_POST['propertyType'];
                                    $priceRange = $_POST['priceRange'];
                                    $location = $_POST['location'];

    
                                    if ($propertyType !== "Property Types") {
                                        $sql .= " AND type = '$propertyType'";
                                    }
                                    if ($priceRange !== "Price") {
                                        $priceValues = explode('-', $priceRange);
                                        $minPrice = trim($priceValues[0]);
                                        $maxPrice = trim($priceValues[1]);
                                        $sql .= " AND price BETWEEN $minPrice AND $maxPrice";
                                    }
                                    if ($location !== "Location") {
                                        $sql .= " AND location = '$location'";
                                    }
                                }
                                
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <div class="position-relative overflow-hidden">
                                            <form action="propertydetails.php" method="post">
                                            <input type="hidden" name="property_id" value="' . $row["id"] . '">
                                            <button type="submit" style="border: none; outline: none;"><img class="img-fluid" src="img/property-1.jpg" alt=""></button>
                                        </form>
                                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell</div>
                                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">'.$row["type"].'</div>
                                            </div>
                                            <div class="p-4 pb-0">
                                                <h5 class="text-primary mb-3">'.$row["price"].'</h5>
                                                <a class="d-block h5 mb-2" href="">'.$row["name"].'</a>
                                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>'.$row["address"].'</p>
                                            </div>
                                            <div class="d-flex border-top">
                                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>'.$row["area"].' Sqft</small>
                                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>'.$row["beds"].' Bed</small>
                                                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>'.$row["baths"].'Bath</small>
                                            </div>
                                            
                                        </div>
                                    </div>';
            
                                    }
                                } else {
                                    echo "No results found.";
                                }
                        ?>
                    <!-- Property List End -->

        

        <!-- Footer Start -->
        <?php
                include("footer.php");
        ?>
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