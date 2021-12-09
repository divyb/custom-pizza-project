<?php

    $top = array();

    if(isset($_POST['olives']))
       array_push($top,"olive");

    if(isset($_POST['tomato']))
        array_push($top,"tomato");

    if(isset($_POST['capsicum']))
        array_push($top,"capsicum");

    if(isset($_POST['pepperoni']))
        array_push($top,"pepperoni");

    if(isset($_POST['mushroom']))
        array_push($top,"mushroom");

    if(isset($_POST['onion']))
        array_push($top,"onion");

    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Cart</title>
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
        <div class="cartbox">
            <h1>Cart</h1>
            
            <p>Toppings<br> <br><?php 
             for($i = 0,$j=$i+1;$i<count($top);$i++,$j++)
                echo "$j. $top[$i]  <br><br>";
            
                $amt = (count($top)%4)*50 + 300;

                echo "Total Amount = $amt";
            ?> 
             
            </p>
        </div>
    </div>
</body>
</html>

