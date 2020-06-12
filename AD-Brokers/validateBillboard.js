function validateADD()
{
    var price = document.getElementById("price").value;
    var Cname = document.getElementById("Cname").value;
    var location = document.getElementById("location").value;
    var Pnumber = document.getElementById("Pnumber").value;
    var state = document.getElementById("state").value;
    var image = document.getElementById("image").value;

    if (price == "" || Cname=="" || location=="" || Pnumber=="" || state=="" || image=="")
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
    counter = 0;
    /*Check price is numbers only*/
    for (var i=0 ; i<price.length ; i++)
    {
        if(parseInt(price.charAt(i)) || price.charAt(i)=="0" && !(price.charAt(0) == "0"))
        {
            counter++;
        }
    }
    if(counter != price.length)
    {
        alert("You entered wrong price formate");
        return false;
    }
    /*Check price*/
}

function validateUPDATE()
{
    
    var price = document.getElementById("uprice").value;    
    var Cname = document.getElementById("uCname").value;
    var location = document.getElementById("ulocation").value;
    var Pnumber = document.getElementById("uPnumber").value;
    var state = document.getElementById("ustate").value;
    var image = document.getElementById("uimage").value;

    if (price == "" || Cname=="" || location=="" || Pnumber=="" || state=="" || image=="")
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
    counter = 0;
    /*Check price is numbers only*/
    for (var i=0 ; i<price.length ; i++)
    {
        if(parseInt(price.charAt(i)) || price.charAt(i)=="0" && !(price.charAt(0) == "0"))
        {
            counter++;
        }
    }
    if(counter != price.length)
    {
        alert("You entered wrong price formate");
        return false;
    }
    /*Check price*/
}