<?php
  session_start();
  include "connect.php";
?>

<?php
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    #$file=$_FILES["fileToUpload"]["name"];
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (isset($_POST["submit"])) {
        $p_name = $_POST["name"];
        $p_price = $_POST["price"];
        $p_details = $_POST["details"];
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG & PNG files are allowed.";
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {

        
        $file=$_FILES["fileToUpload"];
        $uniq=$file["name"];
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql= "INSERT INTO `products` 
            (`product_name`, `product_price`, `product_desc`, 
            `product_image`) 
            VALUES ('$p_name', '$p_price', '$p_details', 
            '$uniq')";

            $run_query = mysqli_query($con,$sql);


            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/topnav6.css">
    <title>Welcome to Flipcart</title>
</head>
<body>
 
        <div class="topnav">
        <div id="mySidenav" class="sidenav">
        <ul>
        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br><br><br><br><br><br>
          <li><a href="adminhome.php">Home</a></li><br><br><br>
          <li><a href="dashboard.php">Dashboard</a></li><br><br><br>
          <li><a href="orders.php">Orders</a></li><br><br><br>
          <li><a href="brand.php">Brand</a></li><br><br><br>
          <li><a href="categories.php">Categories</a></li><br><br><br>
          <li><a href="customers.php">Customers</a></li><br><br><br>
          </ul>
        </div>
        <a style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</a>

        <a align="center"><strong> <img src="flip.png" height="20" width="16"> FLIPCART</strong></a>
        <div class="topnav-right">
            <div class="dropdown">
              <button class="dropbtn"><img src="1234.png" height="14" width="15"><?php echo "Hi ".$_SESSION["name"]; ?>
                <i class="fa fa-caret-down"></i>
              </button>
                    <div class="dropdown-content">
                      <a href="adminlogin.php" onclick="myFunction()">Logout</a>
                    </div>
            </div> 
        </div>
      
</div>
          <form class="two" method="post" enctype="multipart/form-data">
               <h1><strong><em>Welcome to Flipcart</em></strong><br><br><br>
               <h2><strong><u>Add Products</u></strong></h2><br><br><br>
               Product Name: <input type="text" name="name" required placeholder="Product Name"><br><br><br>
               Product Price: <input type="number" name="price" required placeholder="Product Price"><br><br><br>
               <textarea name="details" rows="5" columns="15" required placeholder="Product Details"></textarea><br><br><br>
               Product Image:<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
               <button type="submit"  name="submit" value="Submit">Submit</button><br><br><br>
               
          </form>
          
      
        <script src="js/script3.js"></script>
</body>
</html>