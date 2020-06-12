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
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        if($email && $name && $message)
        {

        $query = "SELECT * FROM users";
        $query2 = "SELECT * FROM companies";

        $result = mysqli_query($connection,$query);
        $result2 = mysqli_query($connection,$query2);

        $counter = 0;
        
        $emails = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $emails[$counter] = $row["Email"];
            $counter += 1;
        }
        while($row2 = mysqli_fetch_assoc($result2))
        {
            $emails[$counter] = $row2["Email"];
            $counter += 1;
        }

        $found = 0;
        for($i=0 ; $i<sizeof($emails) ; $i++)
        {
            if($email==$emails[$i])
            {
                $found += 1;
            }
        }

        if($found>0)
        {
            $id_user = $_SESSION['userID'];
            $query3 = "INSERT INTO messages(Usid,Uname,Email,Umessage) VALUES ('$id_user','$name','$email','$message')";
            mysqli_query($connection,$query3);
            echo"<script>alert('Your Feedback is sent Successfully')</script>";
            echo"<script>window.location.href = 'feedback.php'</script>";
            // header('Location:feedback.php');
            // exit;
            // echo "<script>alert('Your Feedback is sent Successfuly')</script>";
        }
        else
        {
            echo"<script>alert('Your Email is wrong')</script>";
            echo"<script>window.location.href = 'feedback.php'</script>";
        }

    }
    else
    {
        echo"<script>alert('You should enter all fields')</script>";
        echo"<script>window.location.href = 'feedback.php'</script>";
    }
}
    else
    {
        die("Error in supmission!!");
    }
}
else
{
    die("Error in connection!!");
}

    
?>