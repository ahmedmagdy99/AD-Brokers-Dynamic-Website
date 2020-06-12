function validateU()
{
    var Fname = document.getElementById("Fname").value;
    var Lname = document.getElementById("Lname").value;
    var Pnumber = document.getElementById("Pnumber").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (Fname == "" || Lname=="" || Pnumber=="" || email=="" || password=="")
    {
        alert ("You should enter all fields");
        return false;
    }

    var counter = 0;

    /*Check Pnumber Length=11 & numbers only*/
    if(Pnumber.length!=11 || !(Pnumber.charAt(0)=="0" && Pnumber.charAt(1)=="1"))
    {
        alert ("You Entered wrong number");
        return false;
    }

    for (var i=0 ; i<Pnumber.length ; i++)
    {
        if(parseInt(Pnumber.charAt(i)) || Pnumber.charAt(i)=="0") 
        {
            counter++;
        }
    }
    if(counter!=11)
    {
        alert("You entered wrong number formate");
        return false;
    }
    /*Check Pnumber*/
    counter=0;
    /*Check Email has .com*/
        if(!(email.charAt(email.length-1)=="m" && email.charAt(email.length-2)=="o" && email.charAt(email.length-3)=="c" && email.charAt(email.length-4)==".")) 
        {
            alert("Wrong email formate");
            return false;
        }
        for (var i=0 ; i<email.length ; i++)
        {
            if(email.charAt(i)=="@")
            {
                counter++;
            }
        }
        if(counter==0 || counter>1)
        {
            alert("Wrong email formate");
            return false;
        }
    /*Check Email*/

}

function validateC()
{
    var Cname = document.getElementById("Cname").value;
    var Clocation = document.getElementById("Clocation").value;
    var Cnumber = document.getElementById("Cnumber").value;
    var Cemail = document.getElementById("Cemail").value;
    var Cpassword = document.getElementById("Cpassword").value;

    if (Cname == "" || Clocation=="" || Cnumber=="" || Cemail=="" || Cpassword=="")
    {
        alert ("You should enter all fields");
        return false;
    }

    var counter = 0;

    /*Check Pnumber Length=11 & numbers only*/
    if(Cnumber.length!=11 || !(Cnumber.charAt(0)=="0" && Cnumber.charAt(1)=="1"))
    {
        alert ("You Entered wrong number");
        return false;
    }

    for (var i=0 ; i<Cnumber.length ; i++)
    {
        if(parseInt(Cnumber.charAt(i)) || Cnumber.charAt(i)=="0") 
        {
            counter++;
        }
    }
    if(counter!=11)
    {
        alert("You entered wrong number formate");
        return false;
    }
    /*Check Pnumber*/
    counter=0;
    /*Check Email has .com*/
        if(!(Cemail.charAt(Cemail.length-1)=="m" && Cemail.charAt(Cemail.length-2)=="o" && Cemail.charAt(Cemail.length-3)=="c" && Cemail.charAt(Cemail.length-4)==".")) 
        {
            alert("Wrong email formate");
            return false;
        }
        for (var i=0 ; i<Cemail.length ; i++)
        {
            if(Cemail.charAt(i)=="@")
            {
                counter++;
            }
        }
        if(counter==0 || counter>1)
        {
            alert("Wrong email formate");
            return false;
        }
    /*Check Email*/
}

function validateUS()
{
    var email = document.getElementById("Siemail").value;
    var password = document.getElementById("Sipassword").value;

    if (email=="" || password=="")
    {
        alert ("You should enter all fields");
        return false;
    }

    var counter = 0;

    counter=0;
    /*Check Email has .com*/
        if(!(email.charAt(email.length-1)=="m" && email.charAt(email.length-2)=="o" && email.charAt(email.length-3)=="c" && email.charAt(email.length-4)==".")) 
        {
            alert("Wrong email formate");
            return false;
        }
        for (var i=0 ; i<email.length ; i++)
        {
            if(email.charAt(i)=="@")
            {
                counter++;
            }
        }
        if(counter==0 || counter>1)
        {
            alert("Wrong email formate");
            return false;
        }
    /*Check Email*/
}

