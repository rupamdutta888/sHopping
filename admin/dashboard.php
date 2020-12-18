<?php
  session_start();
  include "connect.php";

?>

<?php

$sql = "SELECT * FROM admin_info";
$result = mysqli_query($con, $sql);
$i = mysqli_num_rows($result);
if ($i > 0) {
    $row = mysqli_fetch_assoc($result);
        
} else {
    echo "0 results";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/topnav5.css">
    <title>Welcome to Flipcart</title>
</head>
<body>
 
        <div class="topnav">
        <a href="adminhome.php">Home</a>
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

    <table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th> 
  </tr>
  <?php

    $sql = "SELECT * FROM admin_info";
    $result = mysqli_query($con, $sql);
    $i = mysqli_num_rows($result);
    if ($i > 0) {
        while($row = mysqli_fetch_assoc($result)){
          echo" <tr>";
          echo" <td>".$row["first_name"]." ".$row["last_name"]."</td>";
          echo" <td>".$row["email"]."</td>"; 
          echo" <td><a href='delete.php'>delete</a></td>";
          echo"</tr>";
        }
            
    } else {
        echo "0 results";
    }

    ?>

  
</table><br><br><br>

<script src="js/script6.js"></script>
</body>
</html>