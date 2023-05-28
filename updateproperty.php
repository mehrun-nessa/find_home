<?php
include 'session.php';
        if ($type!='Seller') {
            echo '<script>window.location="index.php"</script>';
            
        }
        if(isset($_POST['property_id'])){
            $propertyId = $_POST['property_id'];

            $sql="SELECT * FROM property WHERE id='$propertyId'";
                    $result=mysqli_query($con,$sql);


            while($row=mysqli_fetch_assoc($result)){
                            $id=$row["id"];
                            $name=$row["name"];
                            $location=$row["location"];
                            $type=$row["type"];
                            $city=$row["city"];
                            $country=$row["country"];
                            $bed=$row["beds"];
                            $bath=$row["baths"];
                            $size=$row["area"];
                            $price=$row["price"];
                            $address=$row["address"];
                            $owner=$row["owner"];

                        }
        } 
        else 
        {
            echo "Property ID not provided.";
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Update Property</title>

    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    

</head>
<body>
    
    <div class="container">
        <div class="leftbox">
            <nav>
                <a onclick="tabs(0)" class="tab">
                    <i class="fa fa-info-circle"></i>
                </a>

                <a onclick="tabs(1)" class="tab">
                    <i class="fa fa-home"></i>
                </a>
            </nav>
        </div>
        <div class="rightbox">

                        <form action="propertyupdate.php" method="post">
                            <input type="hidden" name="property_id" value="<?php echo $id; ?>">
                            
                        
        
            <div class="general tabShow">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <h1>General Information</h1>
                <h2>Name</h2>
                <input type="text" name="name" class="input" value="<?php echo $name; ?>">
                <h2>Type</h2>
                    <select class="input" name="type">
                        <option value="">Select the type of the Property</option>
                        <option value="Commercial"<?php if ($type == 'Commercial') echo ' selected'; ?>>Commercial</option>
                        <option value="Residential"<?php if ($type == 'Residential') echo ' selected'; ?>>Residential</option>
                    </select>
                <h2>Location</h2>
                    <select class="input" name="location">
                        <option value="">Select Area</option>
                        <option value="Mirpur"<?php if ($location == 'Mirpur') echo ' selected'; ?>>Mirpur</option>
                        <option value="Uttara"<?php if ($location == 'Uttara') echo ' selected'; ?>>Uttara</option>
                        <option value="Bashundhara"<?php if ($location == 'Bashundhara') echo ' selected'; ?>>Bashundhara</option>
                        <option value="Gulshan"<?php if ($location == 'Gulshan') echo ' selected'; ?>>Gulshan</option>
                        <option value="Banani"<?php if ($location == 'Banani') echo ' selected'; ?>>Banani</option>
                        <option value="Shantinagar"<?php if ($location == 'Shantinagar') echo ' selected'; ?>>Shantinagar</option>
                        <option value="Kalshi"<?php if ($location == 'Kalshi') echo ' selected'; ?>>Kalshi</option>
                        <option value="Jatrabari"<?php if ($location == 'Jatrabari') echo ' selected'; ?>>Jatrabari</option>
                    </select>

                <h2>City</h2>
                        <select class="input" name="city">
                            <option value="">Select City</option>
                            <option value="Dhaka"<?php if ($city == 'Dhaka') echo ' selected'; ?>>Dhaka</option>
                            <option value="Rajshahi"<?php if ($city == 'Rajshahi') echo ' selected'; ?>>Rajshahi</option>
                            <option value="Sylhet"<?php if ($city == 'Sylhet') echo ' selected'; ?>>Sylhet</option>
                            <option value="Mymensingh"<?php if ($city == 'Mymensingh') echo ' selected'; ?>>Mymensingh</option>
                            <option value="Chittagong"<?php if ($city == 'Chittagong') echo ' selected'; ?>>Chittagong</option>
                            <option value="Dinajpur"<?php if ($city == 'Dinajpur') echo ' selected'; ?>>Dinajpur</option>
                            <option value="Khulna"<?php if ($city == 'Khulna') echo ' selected'; ?>>Khulna</option>
                            <option value="Barisal"<?php if ($city == 'Barisal') echo ' selected'; ?>>Barisal</option>
                            <option value="Bhola"<?php if ($city == 'Bhola') echo ' selected'; ?>>Bhola</option>
                            <option value="Kumilla"<?php if ($city == 'Kumilla') echo ' selected'; ?>>Kumilla</option>
                        </select>

                <h2>Country</h2>
                    <select class="input" name="country" required>
                        <option value="">Select Country</option>
                        <option value="Bangladesh"<?php if ($country == 'Bangladesh') echo ' selected'; ?>>Bangladesh</option>
                    </select>

                <button class="btn">Update</button>
            </div>
            <!-- <div class="appartment tabShow">
                <h1>Appartments Information</h1>
                <h2>Land Area</h2>
                <input type="text" name="name" class="input" value="10 Katha">
                <h2>Facing</h2>
                <input type="text" name="name" class="input" value="South">
                <h2>Number of Elevators</h2>
                <input type="text" name="name" class="input" value="1"> 
                <h2>Number of Floors</h2>
                <input type="text" name="name" class="input" value="10">
                <h2>Number of Appartments</h2>
                <input type="text" class="input" value="30">
                <h2>Parking</h2>
                <input type="text" class="input" value="Basement+Ground">
                <h2>Number of Car Parking</h2>
                <input type="text" class="input" value="20">
                <button class="btn">Update</button>
            </div> -->
            <div class="flats tabShow">
                <h1>Each Flats Contain</h1>
                <h2>Area Size (in Sqft)</h2>
                <input type="text" name="size" class="input" value="<?php echo $size; ?>">
                <h2>Price</h2>           
                <input type="text" name="price" class="input" value="<?php echo $price; ?>">
                <h2>Address</h2>           
                <input type="text" name="address" class="input" value="<?php echo $address; ?>"> 
                <h2>Number of Beds</h2>
                        <select class="input" name="bed">
                            <option value="">Select Number of beds</option>
                            <option value="1"<?php if ($bed == '1') echo ' selected'; ?>>1</option>
                            <option value="2"<?php if ($bed == '2') echo ' selected'; ?>>2</option>
                            <option value="3"<?php if ($bed == '3') echo ' selected'; ?>>3</option>
                            <option value="4"<?php if ($bed == '4') echo ' selected'; ?>>4</option>
                        </select>

                <h2>Number of Baths</h2>
                    <select class="input" name="bath" required>
                        <option value="">Select Number of baths</option>
                        <option value="1"<?php if ($bath == '1') echo ' selected'; ?>>1</option>
                        <option value="2"<?php if ($bath == '2') echo ' selected'; ?>>2</option>
                        <option value="3"<?php if ($bath == '3') echo ' selected'; ?>>3</option>
                    </select>

                <button class="btn">Update</button>

                </form>
            </div>
        </div>
    </div>
    
    
    <script src="jquery/jquery.js"></script>
    <script>
        const tabBtn= document.querySelectorAll(".tab");
        const tab= document.querySelectorAll(".tabShow");

        function tabs(panelIndex){
            tab.forEach(function(node) {
                node.style.display = "none";
            });
            tab[panelIndex].style.display = "block";
        }
        tabs(0);

    </script>
    <script>
         $(".tab").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
            
         });
    </script>
</body>
</html>