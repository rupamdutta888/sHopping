<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="./css/topnav.css">
     <title>User Login</title>
</head>
<body>
        <div class="topnav">
          <a href="home.php">Home</a>
          <a align="center"><strong> <img src="flip.png" height="20" width="16"> FLIPCART</strong></a>
           
            <div class="topnav-right">
               <div class="dropdown">
               <button class="dropbtn"><img src="123456.png" height="24" width="24">New User
                     <i class="fa fa-caret-down"></i>
                </button>
                    <div class="dropdown-content">
                              <a href="signup.php">Signup</a>
                              
                    </div>
            </div>
            </div>
          </div>
          <form class="two" action="connect3.php" method="post" id="submit">
               <h1><strong><em>Welcome to Flipcart</em></strong><br><br><br>
               <h2><strong><u>User Login</u></strong></h2><br><br><br><br><br><br><br>
               E-mail: <input type="text" name="email" required placeholder="email"><br><br><br>
               Password: <input type="password" name="password" required placeholder="password"><br><br><br><br><br><br>
               <button type="submit" name="submit" value="submit">Submit</button><br><br><br>
          </form>
          
          
</body>
</html>
