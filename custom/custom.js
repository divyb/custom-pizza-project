const cnt=[] 
function toppingclick() 
{
    var olive = document.getElementById("olive");
    var oliveimage = document.getElementById("olives");

    if (olive.checked == true)
    {
        oliveimage.style.visibility = "visible";
        
    }
     else
        {
        oliveimage.style.visibility= "hidden";
        
        }

    var tomato = document.getElementById("tomato");
    var tomatoesimage = document.getElementById("tomatoes");

    if (tomato.checked == true)
        {
        tomatoesimage.style.visibility = "visible";
        }
     else 
        {
            tomatoesimage.style.visibility= "hidden";
        }
        


    var mushroom = document.getElementById("mushroom");
    var mushroomimage = document.getElementById("mushrooms");

    if (mushroom.checked == true)
        {
                mushroomimage.style.visibility = "visible";

        }
     else 
        {
                mushroomimage.style.visibility= "hidden";

        }

    var onion = document.getElementById("onion");
    var onionimage = document.getElementById("onions");

    if (onion.checked == true)
        {
        onionimage.style.visibility = "visible";
        }
     else
        {
            onionimage.style.visibility= "hidden";
        }
        

    var pepperoni = document.getElementById("pepperoni");
    var pepperoniimage = document.getElementById("pepperonis");

    if (pepperoni.checked == true)
        {
            pepperoniimage.style.visibility = "visible";
        }
        
     else
        {
            pepperoniimage.style.visibility= "hidden";
        }
        

    var capsicum = document.getElementById("capsicum");
    var capsicumimage = document.getElementById("capsicums");

    if (capsicum.checked == true)
        {
            capsicumimage.style.visibility = "visible";
        }
        
     else 
        {
                    capsicumimage.style.visibility= "hidden";

        }

        var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        
}
  
  
