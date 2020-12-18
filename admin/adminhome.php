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
    <link rel="stylesheet" href="./css/topnav4.css">
    <title>Welcome to Flipcart</title>
</head>
<body>
 
        <div class="topnav">
        <div id="mySidenav" class="sidenav">
        <ul>
        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br><br><br><br><br><br>
          <li><a href="dashboard.php">Dashboard</a></li><br><br><br>
          <li><a href="orders.php">Orders</a></li><br><br><br>
          <li><a href="products.php">Products</a></li><br><br><br>
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
      
        <script src="js/script2.js"></script>
</body>
</html>