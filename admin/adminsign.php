<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style2.css">
    <title>Admin Signup</title>
</head>
<body>
<div class="topnav">
<a><strong> <img src="flip.png" height="20" width="16"> FLIPCART</strong></a>
        <a href="adminlogin.php">Login</a>
        </div>
            <div class="one">
            <fieldset>
                <form method="post" action="connect2.php" id="submit">
                <h1><strong><em>Welcome to Flipcart</em></strong></h1><br><br><br>
                <h2><strong><u>New Admin Registration</u></strong></h2><br>
                First Name: <input type="text" name="f_name" required placeholder="firstname"><br><br><br>
                Last Name: <input type="text" name="l_name" required placeholder="lastname"><br><br><br>
                E-mail: <input type="text" name="email" required placeholder="email"><br><br><br>
                Password: <input type="password" name="password" required placeholder="password"><br><br><br>
                Confirm Password: <input type="password" name="repassword" required placeholder="confirmpassword"><br><br><br>
                <button type="submit" name="submit" value="Submit">Submit</button><br><br>
                </form>
            </fieldset>
            </div>
</body>
</html>