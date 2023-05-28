<?php
include 'header.php';
        if(isset($_POST['property_id'])){
            $propertyId = $_POST['property_id'];

            $sql="SELECT * FROM property WHERE id='$propertyId'";
            $result=mysqli_query($con,$sql);


            while($row=mysqli_fetch_assoc($result)){
                            $pid=$row["id"];
                            $pname=$row["name"];
                            $plocation=$row["location"];
                            $ptype=$row["type"];
                            $pcity=$row["city"];
                            $pcountry=$row["country"];
                            $pbed=$row["beds"];
                            $pbath=$row["baths"];
                            $psize=$row["area"];
                            $pprice=$row["price"];
                            $paddress=$row["address"];
                            $powner=$row["owner"];

                        }
            $sql2="SELECT * FROM user WHERE id='$powner'";
            $result2=mysqli_query($con,$sql2);
            
            
                        while($row=mysqli_fetch_assoc($result2)){
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
            echo "Property ID not provided.";
        }

?>

<style>
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 22px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.column {
  float: left;
  padding: 10px;
}

column.side {   
  
  width: 25%;
}

column.middle {
  
  width: 50%;
}


/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}



/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {   
    width: 100%;
  }
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
</style>
    
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Property Details</h1>
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="property-list.php">Property List</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page"><?php echo $pname; ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->
        <br><br><br><br><br><br>
        <br><br><br><br><br>
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h3 class="display-5 animated fadeIn mb-4">Overview <span class="text-primary">of <?php echo $pname; ?></span> </h3>
                    <p class="animated fadeIn mb-4 pb-2"><?php echo $pname; ?> offers Assure Fair View, an attractive <?php echo $ptype; ?> property for sale in <?php echo $plocation; ?>, <?php echo $pcity; ?>. This property can be a very suitable for you.</p>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title mt-4">General Information</h4>
                        </div>
                        <div class="panel-body">
                          <table class="table profile__table">
                            <tbody>
                              <tr>
                                <th><strong>Type</strong></th>
                                <td><?php echo $ptype; ?></td>
                              </tr>
                              <tr>
                                  <th><strong>Location</strong></th>
                                  <td><?php echo $plocation.",".$pcity.",".$pcountry; ?></td>
                              </tr>
                              <tr>
                                  <th><strong>Price</strong></th>
                                  <td><?php echo $pprice; ?></td>
                              </tr>
                              <tr>
                                <th><strong>Unit Size</strong></th>
                                <td><?php echo $psize; ?> Sqft</td>
                            </tr>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <br><br> 
                      <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title mt-4">Each Flat Contains</h4>
                        </div>
                        <div class="panel-body">
                          <table class="table profile__table">
                            <tbody>
                              <tr>
                                <th><strong>Number of Bed</strong></th>
                                <td><?php echo $pbed; ?></td>
                              </tr>
                              <tr>
                                  <th><strong>Number of Bath</strong></th>
                                  <td><?php echo $pbath; ?></td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                <br><br> 
                <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title mt-4">Owner Information</h4>
                        </div>
                        <div class="panel-body">
                          <table class="table profile__table">
                            <tbody>
                              <tr>
                                  <th><strong>Name</strong></th>
                                  <td><?php echo $uname; ?></td>
                              </tr>
                              <tr>
                                  <th><strong>Address</strong></th>
                                  <td><?php echo $uaddress; ?></td>
                              </tr>
                              <tr>
                                  <th><strong>Email</strong></th>
                                  <td><?php echo $uemail; ?></td>
                              </tr>
                              <tr>
                                  <th><strong>Phone</strong></th>
                                  <td><?php echo $ucell; ?></td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                        </div>
                      </div>

                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/property-1.jpg" alt="">
                </div>
                
            </div>
        </div>
        

        
<?php include 'footer.php'; ?>



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
