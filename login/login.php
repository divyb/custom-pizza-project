

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
<div class = "leftcolumn">
        <div class="name">
            <a href="../homepage/home.php" style="color: white; text-decoration: none;">
            <h1>The Pizza Party</h1>
        </a>
        </div>
        <div class = "cart">
            <center>
                <br>
            <a href="../cart/cart.php">
                <img src="../Icons/cart.ico" alt="cart">
            
            <h4>Cart</h4>
            
            </a>

            <a href="../custom/custom.php">
                <img src="../Icons/customize.ico" alt="cart">
            <h4>Make Your Own Pizza</h4>
            </a>
            
            </center>
        </div>
        <div class = "login">
            <br>
            <center>
                <a href="../login/login.php">
                    <img src="../Icons/login.ico" alt="">
                 <h4>Login</h4>
                </a>
               

                <a href="../Signup/signup.php">
                    <img src="../Icons/signup.ico" alt="">
                    <h4>Sign Up</h4>
                </a>
                
            </center>
            
        </div>
        <div class="contact">
            <br>
            <center>    
                <a href="../about us/aboutus.php">
                    <img src="../Icons/aboutus.ico" alt="">
                    <h4>About Us</h4>
                </a>
                
            </center>
            
           
        </div>
    </div>
    <div class="main">

        <div class="loginbox">
            <br>
            <img src="lock.ico" alt="" style="height: 20%; width: 20%;">
            
            <form method="POST">
                <br><br><br>
                <input type="email" name="Email" id="email" placeholder="Email">
                
                <br><br><br><br>
                <input type="password" name="Password" id="password" placeholder="Password">
                

                <br><br><br><br>
                <input type="submit" class="submit" name ="submit" value="Log in">
            </form>
        </div>
        
    </div>


    
</body>
</html>

<?php

if(isset($_POST['submit'])) 
{
    $conn = mysqli_connect("localhost","root","passwordb204","wpproject");
    $user = $_POST["Email"];
    $pass = $_POST["Password"];


    $result = mysqli_query($conn,"select * from cred where email = '$user' and pass = '$pass';");

    if(mysqli_num_rows($result)>=1)
    {
        session_start();
        echo '<script>alert("Login Successful"); window.location.href = "../homepage/home.php";</script>';

    }
    else
    {
        echo '<script>alert("Invalid username or password");</script>';
        
    }


}

?>