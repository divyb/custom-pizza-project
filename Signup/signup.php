
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signup.css">
        <script src="signup.js"></script>
        <title>Sign Up</title>
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
    
            <div class="signupbox">
                <br>
                <img src="signup.ico" alt="" style="height: 20%; width: 20%;">
                
                <form method = "POST">
                    <br><br><br>

                    <input type="text" name="fname" id="fname" placeholder="First Name" required>

                    <br><br><br><br>

                    <input type="text" name="lname" id="lname" placeholder="Last Name" required>

                    <br><br><br><br>
                    <input type="email" name="Email" id="email" placeholder="Email" required>
                    
                    <br><br><br><br>
                    <input type="password" name="Password" id="password" placeholder="Password" required>
                    
                    <br><br><br><br>
                    <input type="password" name="Confirm Password" id="cpassword" placeholder="Confirm Password" required>

                    <br><br><br><br>
                    <input type="submit" class="submit" name ="submit" value="Sign Up">
                </form>
            </div>
            
        </div>
    
    
        
    </body>
    </html>

<?php

if(isset($_POST['submit'])) 
{
    $conn = mysqli_connect("localhost","root","passwordb204","wpproject");

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $user = $_POST["Email"];
    $pass = $_POST["Password"];


    mysqli_query($conn,"insert into cred values('$fname','$lname','$user','$pass');");
    mysqli_query($conn,"commit");
    echo '<script>alert("Sign Up Successful"); window.location.href = "../login/login.php";</script>';

}
?>