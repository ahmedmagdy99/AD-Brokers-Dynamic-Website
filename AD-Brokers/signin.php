<?php session_start(); ?>
<?php
/*
if (empty($_POST)){
    exit;
 }
 */

$connection = mysqli_connect("localhost","root","","adbrokers");

if($connection)
{
    if(isset($_POST["Usubmit"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if($email && $password)
        {

        $query = "SELECT * FROM users";

        $result = mysqli_query($connection,$query);

        $counter = 0;
        
        $emails = array();
        $passwords = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $emails[$counter] = $row["Email"];
            $passwords[$counter] = $row["Pass"];
            $counter += 1;
        }

        $found = 0;
        for($i=0 ; $i<sizeof($emails) ; $i++)
        {
            if($email==$emails[$i] && $password==$passwords[$i])
            {
                $found += 1;
            }
        }

        if($found>0)
        {
            // For Session
            $queryS = "SELECT * FROM users";
            $resultS = mysqli_query($connection,$queryS);
            while($rowS = mysqli_fetch_assoc($resultS))
            {
                if($email == $rowS["Email"])
                {
                    $_SESSION['userID'] = $rowS["Uid"];
                }
            }
            // For Session
            echo"<script>window.location.href = 'home.php'</script>";
            //header('Location:home.php');
            //exit;
        }
        else
        {
            echo"<script>alert('Wrong Email or Password')</script>";
            echo"<script>window.location.href = 'index.php'</script>";
            //header('Location:index.php');
        }

    }
    else
    {
        echo "<h1>error</h1>";
    }
}

//Company Login

if (isset($_POST["Csubmit"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if($email && $password)
        {

        $query = "SELECT * FROM companies";

        $result = mysqli_query($connection,$query);

        $counter = 0;
        
        $emails = array();
        $passwords = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $emails[$counter] = $row["Email"];
            $passwords[$counter] = $row["Pass"];
            $counter += 1;
        }

        $found = 0;
        for($i=0 ; $i<sizeof($emails) ; $i++)
        {
            if($email==$emails[$i] && $password==$passwords[$i])
            {
                $found += 1;
            }
        }

        if($found>0)
        {
            // For Session
            $queryS = "SELECT * FROM companies";
            $resultS = mysqli_query($connection,$queryS);
            while($rowS = mysqli_fetch_assoc($resultS))
            {
                if($email == $rowS["Email"])
                {
                    $_SESSION['userID'] = $rowS["Cid"];
                }
            }
            // For Session
            echo"<script>window.location.href = 'home.php'</script>";
            //header('Location:home.php');
            //exit;
            
        }
        else
        {
            echo"<script>alert('Wrong Email or Password')</script>";
            echo"<script>window.location.href = 'index.php'</script>";
            //header('Location:index.php');
        }

    }
    else
    {
        echo "<h1>error</h1>";
    }
}

}
else
{
    die("Error in connection!!");
}

    
?>