<?php
include 'header.php';
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
                    <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To Live With Your Family</h1>
                    <p class="animated fadeIn mb-4 pb-2">Find Home Realty has a clear objective of providing modern homes to the city dwellers. Since the very beginning, we have been working with sincere efforts to build and provide apartments with all the latest facilities in the industry. We provide you with Home for Peace with superior design, reliable construction materials, and enhanced usability.</p>
                   <?php echo $homepageloginbutton; ?>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        </div>
                    </div>
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


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/about.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">About Us</h1>
                        <p class="mb-4">Our motivation is to provide our customers with the best products at an affordable price built by using the best components available along with all possible benefits and services. We also listen carefully to our valued clients even after a decade of experience ,we are often enlightened by their criticisms. This helps us to further improve our design ,quality and overall service. We are developing the website to make it more efficient.</p>
                        <p class="mb-4">This website ensures the users to get a property on the basis of their required-</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Location</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Budget</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Property Type</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


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

                                // Perform the database query
                                $result = mysqli_query($con, $sql);

                                // Process the search results
                                if (mysqli_num_rows($result) > 0) {
                                    // Loop through the results and display them
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
                                    // No results found
                                    echo "No results found.";
                                }
                        ?>
                    <!-- Property List End -->



        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/call-to-action.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact Us</h1>
                                    <p>If you want to contact with the company you can simply call us or give a messege.</p>
                                </div>
                                <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="contact.php" class="btn btn-dark py-3 px-4"><i class="fa me-2"></i>Give a short messege</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Company Profile Start -->
        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Company Profile</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                
                <div class="row">
                    <div class="column side">
                      <div class="card">
                        
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                    <img class="img-fluid w-100" src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__480.jpg" alt="" style="max-width: 400px;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <h1 class="mb-4">Home For Peace</h1>
                                <p>Find Home Realty has a clear objective of providing modern homes to the city dwellers. Since the very beginning, we have been working with sincere efforts to build and provide apartments with all the latest facilities in the industry. We provide you with Home for Peace with superior design, reliable construction materials, and enhanced usability.</p>
                                <p>By Home for Peace we Mean:</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Peace Of Mind</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Comfort of Living</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Integrated Safety and Security</p>
                            </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="column middle">
                      <div class="card">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                    <img class="img-fluid w-100" src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__480.jpg" alt="" style="max-width: 400px;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <h1 class="mb-4">How We Build Home for Peace for You:</h1>
                                <p><i class="fa fa-check text-primary me-3"></i>Reliable construction materials that enhance the safety of the building against natural forces like earthquakes.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>The expert engineers ensure designs that are comfortable for today's families.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>Our engineers focus on the high-usability of the entire space.</p>
                                <p><i class="fa fa-check text-primary me-3"></i>The latest facilities in your living space keep you satisfied.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="column side">
                      <div class="card">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                    <img class="img-fluid w-100" src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__480.jpg" alt="" style="max-width: 400px;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <h1 class="mb-4">We Never Compromise With Quality and Best Practices</h1>
                                <p>We have set our own standards that always keeps us on the right track so we can build the real Home for Peace for you and your family. We never compromise with the quality at any stage of a building project. From project site selection to modern fittings, we maintain the best practices prevailing in the industry. The quality of our homes has already got valuable recognition from our clients and the professionals in the industry.</p>
                                <p>Our quality has lead to making a successful real estate brand in Bangladesh in a short period of time.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company Profile end -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Property Agents</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/agent1.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Momtahina Rahman</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/agent2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Mehrun Nesa</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/agent3.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Fehenna Tazrian</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/agent4.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Sanjida Islam</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        

        <?php
        include 'footer.php';
        ?>     





    