<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/topnav2.css">
    <title>Welcome to Flipcart</title>
</head>
<body>
<div class="topnav">
<a align="center"><strong> <img src="flip.png" height="20" width="16"> FLIPCART</strong></a>
  <div class="topnav-right">
      <a href="signup.php">Signup</a>
      <a href="cart.php"><img src="640.png" height="14" width="15">Cart</a>
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
<h1 align="center"><strong><em>Welcome to Flipcart</em></strong></h1><br>
<h2 align="center"><strong><u>Products</u></strong>
<div class="main">
<div class="row">
    <?php
          $sql = "SELECT * FROM products";
          $result = mysqli_query($con, $sql);
          $i = mysqli_num_rows($result);
          if ($i > 0) {
            while($row = mysqli_fetch_array($result)){
              $p_id=$row['product_id'];
              $p_name=$row['product_name'];
              $p_price=$row['product_price'];
              $p_detail=$row['product_desc'];
              $p_image=$row['product_image'];
              // $_SESSION["u_id"] = $_SESSION["uid"];
              // $_SESSION["pr_name"] = $row["product_name"];
              // $_SESSION["pr_price"] = $row["product_price"];
              // $_SESSION["pr_desc"] = $row["product_desc"];
              // $_SESSION["pr_imge"] = $row["product_image"];
             echo "  
                  <div class='column'>
                  <div class='card'>
                  <img src='admin/image/$p_image' style='height:70px' width:50px'>
                  <h1> $p_name</h1>
                  <p class='price'>$p_price</p>
                  <p>$p_detail</p>
                  <p><button href='cart.php'>Add to Cart</button></p>
                  </div>
                  </div>
            
              
              ";
            }
          } else {
              echo "0 results";
          }
          
    ?>
    </div>
    </div>
        <div class="footer">
            <div class="three"><h4 align="center">
            
            Flipcart Delhi Branch<br>Pani Sarani, Diamond Park<br> Loka<br> Delhi 200139</div>    
                   
            
            <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
        </div>
        <script src="js/script.js"></script>
</body>
</html>