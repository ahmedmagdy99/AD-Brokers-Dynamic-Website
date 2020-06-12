<?php 

$connection = mysqli_connect("localhost","root","","adbrokers");
if(!$connection)
{
    die("Error in connection!!");
}

if(isset($_POST["submit"]))
{
        $id = $_POST["id"];
    if($id)
    {
        $query = "DELETE FROM billboards WHERE Cid='$id'";
        mysqli_query($connection,$query);
        echo"<script>alert('Product deleted Successfully')</script>";
        echo"<script>window.location.href = 'Billboard.php'</script>";
        //header('Location:Billboard.php');
        //exit;
    } 
    else
    {
        echo"<script>alert('Enter all fields please!!')</script>";
        echo"<script>window.location.href = 'Billboard.php'</script>";
        //die("Enter all fields please!!");
    }
}
else
{
    die("Error in Submission!!");
}

?>