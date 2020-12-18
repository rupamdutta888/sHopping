<?php
session_start();
include "connect.php";


// $u_id=$_SESSION["u_id"];
// $p_name=$_SESSION["pr_name"];
// $p_price=$_SESSION["pr_price"];
// $p_desc=$_SESSION["pr_desc"];
// $p_image=$_SESSION["pr_imge"];
$u_id=$_["u_id"];
$p_name=$_SESSION["pr_name"];
$p_price=$_SESSION["pr_price"];
$p_desc=$_SESSION["pr_desc"];
$p_image=$_SESSION["pr_imge"];


$sql = "INSERT INTO `cart` 
            (`product_name`, `user_id` , `product_price`, `product_desc`, `product_image`) 
            VALUES ('$p_name', '$u_id' , '$p_price', '$p_desc', '$p_image')";
        if(mysqli_query($con,$sql)){
            echo "success";
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/cart.css">
    <title>Cart</title>
</head>
<body>
        <div class="topnav">
          <a href="#"><img src="flip.png" height="20" width="16"><strong>FLIPCART</strong></a>
            <div class="topnav-right">
                <a href="signup.php">Signup</a>
                <a href="myorders.php">Myorders</a>
                <div class="dropdown">
                    <button class="dropbtn"><img src="1234.png" height="14" width="15"><?php echo "Hi ".$_SESSION["name"]; ?>
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                            <a href="login.php" onclick="myFunction()">Logout</a>
                    </div>
                </div> 
            </div>
</div> 
        </div>
  
<script src="js/script2.js"></script>
</body>
</html>