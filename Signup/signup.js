function validate(valform)
{
 
    var pass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    
    if(pass.test(valform.password.value) == false)
        {
            alert("Password be at least 8 characters containing atleast 1 alphabet and number");
            return false;
        }

    if(valform.password.value!=valform.cpassword.value)
        {
            alert("Password and confirm password should be same");
            return false;
        }

}