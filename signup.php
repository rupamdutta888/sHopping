<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>User Registration</title>
</head>
<body> 
        <div class="topnav">
          <a href="home.php">Home</a>
        </div>
            <div class="one">
            <fieldset>
                <form method="post" action="connect2.php" id="submit">
                <h1><strong><em>Welcome to Flipcart</em></strong></h1><br>
                <h2><strong><u>New User Registration</u></strong></h2>
                First Name: <input type="text" name= "f_name" required placeholder="firstname"><br><br><br>
                Last Name: <input type="text" name="l_name" required placeholder="lastname"><br><br><br>
                E-mail: <input type="text" name="email" required placeholder="email"><br><br><br>
                Password: <input type="password" name="password" required placeholder="password"><br><br><br>
                Confirm Password: <input type="password" name="repassword" required placeholder="confirmpassword"><br><br><br>
                Gender: <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female<br><br><br>
                Phone: <input type="name" name="mobile" required placeholder="phone"><br><br><br>
                Address 1: <input type="name" name="address1"><br><br><br>
                Address 2: <input type="name" name="address2"><br><br><br>
                <button type="submit" name="submit" value="Submit">Submit</button>
                </form>
            </fieldset>
            </div>
</body>
</html>