<?php session_start(); ?>
<?php 

$connection = mysqli_connect("localhost","root","","adbrokers");
if(!$connection)
{
    die("Error in connection!!");
}

if(isset($_POST["Usignup"]))
{   
    
    $Fname = $_POST["Fname"];
    $Lname = $_POST["Lname"];
    $Pnumber = $_POST["Pnumber"];
    $Email = $_POST["email"];
    $Password = $_POST["password"];

    if($Fname && $Lname && $Pnumber && $Email && $Password)
    {
        $query2 = "SELECT * FROM users";

        $result = mysqli_query($connection,$query2);

        $counter = 0;
        
        $emails = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $emails[$counter] = $row["Email"];
            $counter += 1;
        }
        $found = 0;
        for($i=0 ; $i<sizeof($emails) ; $i++)
        {
            if($Email==$emails[$i])
            {
                $found += 1;
            }
        }
        if($found>0)
        {
            echo"<script>alert('This Email is signed up before')</script>";
            echo"<script>window.location.href = 'index.php'</script>";
            //header('Location:index.php');
        }
        else
        {
            $query = "INSERT INTO users(Fname,Lname,Pnumber,Email,Pass) VALUES ('$Fname','$Lname','$Pnumber','$Email','$Password')";
            mysqli_query($connection,$query);
            // For Session
            $queryS = "SELECT * FROM users";
            $resultS = mysqli_query($connection,$queryS);
            while($rowS = mysqli_fetch_assoc($resultS))
            {
                if($Email == $rowS["Email"])
                {
                    $_SESSION['userID'] = $rowS["Uid"];
                }
            }
            // For Session
            echo"<script>window.location.href = 'home.php'</script>";
            // header('Location:home.php');
            // exit;
        }  
    } 
    else
    {
        header('Location:index.php');
        exit;
    }
}

if(isset($_POST["Csignup"]))
{   

    $Cname = $_POST["Cname"];
    $Clocation = $_POST["Clocation"];
    $Cnumber = $_POST["Cnumber"];
    $Cemail = $_POST["Cemail"];
    $Cpassword = $_POST["Cpassword"];

    if($Cname && $Clocation && $Cnumber && $Cemail && $Cpassword)
    {
        $query3 = "SELECT * FROM companies";

        $result = mysqli_query($connection,$query3);

        $counter = 0;
            
        $emails = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $emails[$counter] = $row["Email"];
            $counter += 1;
        }
        $found = 0;
        for($i=0 ; $i<sizeof($emails) ; $i++)
        {
            if($Cemail==$emails[$i])
            {
                $found += 1;
            }
        }
        if($found>0)
        {
            echo"<script>alert('This Email is signed up before')</script>";
            echo"<script>window.location.href = 'index.php'</script>";
            //header('Location:index.php');
        }
        else
        {
            $query = "INSERT INTO companies(Cname,Clocation,Cnumber,Email,Pass) VALUES ('$Cname','$Clocation','$Cnumber','$Cemail','$Cpassword')";
            mysqli_query($connection,$query);
            // For Session
            $queryS = "SELECT * FROM companies";
            $resultS = mysqli_query($connection,$queryS);
            while($rowS = mysqli_fetch_assoc($resultS))
            {
                if($Cemail == $rowS["Email"])
                {
                    $_SESSION['userID'] = $rowS["Cid"];
                }
            }
            // echo"<script>alert('$data')</script>";
            // For Session
            echo"<script>window.location.href = 'home.php'</script>";
            //header('Location:home.php');
            //exit;
        }
    } 
    else
    {
        header('Location:index.php');
        exit;
    }
}


?>