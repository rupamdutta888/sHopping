<?php
  include "login.php";
  include "connect.php";
  session_start();
  
  if(isset($_POST["email"]) && isset($_POST["password"])){
      $email = mysqli_real_escape_string($con,$_POST["email"]);
      $password = md5($_POST["password"]);
      $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
      $run_query= mysqli_query($con,$sql);
      $count=mysqli_num_rows($run_query);

      if(count==1)
      {
          $row= mysqli_fetch_array($run_query);
          $_SESSION["uid"] = $row["user_id"];
          $_SESSION["name"] = $row["first_name"];
          
      }
      header ("location:home.php");
  }
?>