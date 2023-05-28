<?php
include 'header.php';
?>


<style> 
body{
    margin-top:20px;
    background:#f5f5f5;
}
.panel {
  box-shadow: none;
}
.panel-heading {
  border-bottom: 0;
}
.panel-title {
  font-size: 17px;
}
.panel-title > small {
  font-size: .75em;
  color: #999999;
}
.panel-body *:first-child {
  margin-top: 0;
}
.panel-footer {
  border-top: 0;
}
.panel-default > .panel-heading {
    color: #333333;
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.07);
}
.profile__avatar {
  float: left;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin-right: 20px;
  overflow: hidden;
}
@media (min-width: 768px) {
  .profile__avatar {
    width: 100px;
    height: 100px;
  }
}
.profile__avatar > img {
  width: 100%;
  height: auto;
}
.profile__header {
  overflow: hidden;
}
.profile__header p {
  margin: 20px 0;
}
@media (min-width: 992px) {
  .profile__table tbody th {
    width: 200px;
  }
}
</style>


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4 mt-5">User Profile</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="about.php">About</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Profile</li>
                        </ol>
                        </nav>
                </div>
                
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->
                    

        <?php 
            if ($type=='Buyer') {
                echo '<div class="container-xxl py-5">
                <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                      <div class="col-lg-6 col-xs-12 col-sm-9">
                        
                        <!-- User profile -->
                        <div class="panel panel-default">
                          <div class="panel-heading text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                          <h1 class="display-8 animated fadeIn mb-4 mt-20" style="color:blue;">Buyer Profile</h1>
                          </div>
                          <div class="panel-body">
                            <div class="profile__avatar">
                              <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="...">
                            </div>
                            
                            <div class="profile__header">
                              <h4>'.$name.'</h4>
                              <h6>'.$occupation.'</h6>
                            
                            <form action="editprofile.php" method="post">
                              <input type="hidden" name="userid" value="'.$userid.'">
                              <button type="submit" class="btn btn-primary py-1 px-2 me-3 animated fadeIn mb-2">Edit Profile Info</button>
                            </form>

                            </div>
                          </div>
                        </div>
                
                        <!-- User info -->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                          <h4 class="panel-title mt-4">Buyer Information</h4>
                          </div>
                          <div class="panel-body">
                            <table class="table profile__table">
                              <tbody>
                                    <tr>
                                        <th><strong>Adress:</strong></th>
                                        <td>'.$address.'</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Phone Number:</strong></th>
                                        <td>'.$cell.'</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Date of Birth:</strong></th>
                                        <td>'.$dob.'</td>
                                    </tr>
                                    <tr>
                                        <th><strong>Nationality:</strong></th>
                                        <td>'.$nationality.'</td>
                                    </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                
    
                    </div>
                    </div>
                </div>
            </div>
    
            
    
    
            
    
    
            <!-- Admin Panel Start -->
            
    
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="panel-heading text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                <h1 class="display-8 animated fadeIn mb-4 mt-20">Search Property</h1>
                            </div>
                            <h4 class="mb-4">If you are interested to buy a property kindly fill the required Information for the property you need and Search for the property.</h4>
                           
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
    
                            <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                <img class="img-fluid w-50" src="https://dvyvvujm9h0uq.cloudfront.net/com/articles/1523966977-realestatephotography-featured.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Admin Panel End -->
    
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
    ';

    echo '<!-- Property List Start -->
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
                    <div class="row g-4">';


                    
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
                    
                echo '<!-- Property List End -->';

    }
    elseif ($type=='Seller') {
           
        
                    $sql = "SELECT * FROM property where `owner`='$userid'";
                    $result=mysqli_query($con,$sql);
                      
            echo '<div class="container-xxl py-5">
            <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                  <div class="col-lg-6 col-xs-12 col-sm-9">
                    
                    <!-- User profile -->
                    <div class="panel panel-default">
                      <div class="panel-heading text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                      <h1 class="display-8 animated fadeIn mb-4 mt-20" style="color:blue;">Seller Profile</h1>
                      </div>
                      <div class="panel-body">
                        <div class="profile__avatar">
                          <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="...">
                        </div>
                        <div class="profile__header">
                          <h4>'.$name.'</h4>
                          <h6>'.$occupation.'</h6>
                        
                        <form action="editprofile.php" method="post">
                          <input type="hidden" name="userid" value="'.$userid.'">
                          <button type="submit" class="btn btn-primary py-1 px-2 me-3 animated fadeIn mb-2">Edit Profile Info</button>
                        </form>
                        
                          
                        </div>
                      </div>
                    </div>
            
                    <!-- User info -->
                    <div class="panel panel-default">
                      <div class="panel-heading">
                      <h4 class="panel-title mt-4">Seller Information</h4>
                      </div>
                      <div class="panel-body">
                        <table class="table profile__table">
                          <tbody>
                            <tr>
                                <th><strong>Adress</strong></th>
                                <td>'.$address.'</td>
                            </tr>
                            <tr>
                                <th><strong>Phone Number</strong></th>
                                <td>'.$cell.'</td>
                            </tr>
                            <tr>
                                <th><strong>Date of Birth</strong></th>
                                <td>'.$dob.'</td>
                            </tr>
                            <tr>
                                <th><strong>Nationality</strong></th>
                                <td>'.$nationality.'</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
            
                    
                    </div>
                </div>
                </div>
            </div>
        </div>
        

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4"></h1>
                        <h4 class="mb-4">If you are interested to sell your property kindly click on Add Property.</h4>
                        <a href="addproperty.php" class="btn btn-primary py-3 px-5 me-3 animated fadeIn mb-2">Add Property</a>
                        <br>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">

                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="https://dvyvvujm9h0uq.cloudfront.net/com/articles/1523966977-realestatephotography-featured.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Admin Panel End -->

        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">List of Property</h1>
                            <h6>Properties added</h6>
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
                <div class="row g-4">';
             
                foreach($result as $row)
                {

                echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
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

                        <div class="d-flex border-top">
                        <form action="updateproperty.php" method="post">
                            <input type="hidden" name="property_id" value="' . $row["id"] . '">
                            <button type="submit" class="btn btn-primary py-1 px-3 me-3 animated fadeIn">Update Property</button>
                        </form>
                        <form action="deleteproperty.php" method="post">
                            <input type="hidden" name="property_id" value="' . $row["id"] . '">
                            <button type="submit" class="btn btn-danger py-1 px-3 me-3 animated fadeIn" onclick="return confirm(\'Are you sure you want to delete this property?\')">Delete Property</button>
                        </form>
                        </div>
                        
                    </div>
                </div>';

                }

                echo '</div>
            </div>
        </div>
        <!-- Property List End -->';
        }
        
        else  
            {
                echo '<script>window.location="index.php"</script>';

            }

        ?>

        <?php
        include 'footer.php';
        ?>    