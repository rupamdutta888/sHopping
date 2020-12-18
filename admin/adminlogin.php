<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="./css/topnav3.css">
     <title>Admin Login</title>
</head>
<body>
        <div class="topnav">
        <a><strong> <img src="flip.png" height="20" width="16"> FLIPCART</strong></a>
            <div class="topnav-right">
               <div class="dropdown">
               <button class="dropbtn"><img src="123456.png" height="24" width="24">New Admin
                </button>
                    <div class="dropdown-content">
                              <a href="adminsign.php">Signup</a>
                              
                    </div>
            </div>
            </div>
          </div>
          <form class="two" action="adminhome.php" method="post" id="submit">
               <h1><strong><em>Welcome to Flipcart</em></strong><br><br><br>
               <h2><strong><u>Admin Login</u></strong></h2><br><br><br><br><br><br><br>
               E-mail: <input type="text" name="email" required placeholder="email"><br><br><br>
               Password: <input type="password" name="password" required placeholder="password"><br><br><br><br><br><br>
               <button type="submit" form="submit" value="Submit">Submit</button><br><br><br>
          </form>
          
          
</body>
</html>
