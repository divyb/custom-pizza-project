<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    <title>Your Pizza Your Way</title>
    <script src="custom.js"></script>
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
    <div class="pizza">
        <img  class = "base"src="../pngs/Base.png" alt="" style="transform: scale(0.9);">
        <img  id ="pepperonis" class ="pepperoni"src="../pngs/pepperoni10.png" alt="" style="visibility: hidden;">
        <img  id = "olives" class="olive" src="../pngs/olive.png" alt="" style="visibility: hidden;">
        <img  id = "onions" class ="onion"src="../pngs/onion1.png" alt="" style="visibility: hidden;">
        <img id = "tomatoes" class ="tomatoes" src="../pngs/tomatoes.png" alt="" style="visibility: hidden;">
        <img id = "mushrooms"class ="mushroom" src="../pngs/mushrooms.png" alt="" style="visibility: hidden;">

        <img id = "capsicums"class ="capsicum" src="../pngs/capsicum.png" alt="" style="visibility: hidden;">
        
    </div>

    <div class="ingredients">
        <form method="POST" action = "../cart/cart.php">
            <br>
            <label style="font-weight: bolder;">Choose your ingredients</label>
            <br><br><br><br>
            <input type="checkbox" name="olives" id="olive" onclick="toppingclick()">
            <label for="olives">Olives</label>
            
            <br><br><br>
            <input type="checkbox" name="tomato" id="tomato" onclick="toppingclick()">
            <label for="tomatoes">Tomatoes</label>

            <br><br><br>
            <input type="checkbox" name="capsicum" id="capsicum" onclick="toppingclick()">
            <label for="capsicum">Capsicum</label>

            <br><br><br>
            <input type="checkbox" name="pepperoni" id="pepperoni" onclick="toppingclick()">
            <label for="pepperoni">Pepperoni</label>
            
            <br><br><br>
            <input type="checkbox" name="mushroom" id="mushroom" onclick="toppingclick()">
            <label for="mushroom">Mushroom</label>
            
            <br><br><br>
            <input type="checkbox" name="onion" id="onion" onclick="toppingclick()">
            <label for="olives">Onions</label>

            <br><br>
            <input type="submit" class="submit" name ="add" value="Add to Cart">
            
            
        </form>
    </div>
    </div>  
</body>
</html>