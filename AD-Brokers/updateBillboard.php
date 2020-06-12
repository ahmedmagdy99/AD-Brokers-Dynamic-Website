<?php session_start(); ?>

<?php 

$connection = mysqli_connect("localhost","root","","adbrokers");
if(!$connection)
{
    die("Error in connection!!");
}

if(isset($_POST["submit"]))
{
        $file_get = $_FILES["image"]["name"];
        $temp = $_FILES["image"]["tmp_name"];
        $id = $_POST["id"];
        $price = $_POST["price"];
        $location = $_POST["location"];
        $company = $_POST["Cname"];
        $phone = $_POST["Pnumber"];
        $state = $_POST["state"];
        
        $idu = $_SESSION['userID'];
        $file_to_saved = "images/".$file_get;

        move_uploaded_file($temp, $file_to_saved);

    if($id && $price && $location && $company && $phone && $state)
    {
        $query = "UPDATE billboards SET companyID= '$idu' , price='$price' , Blocation='$location' , company='$company' , phone='$phone' , Bstate='$state' , img='".$file_to_saved."' WHERE Cid='$id'";
        mysqli_query($connection,$query);
        echo"<script>alert('Product updated Successfully')</script>";
        echo"<script>window.location.href = 'Billboard.php'</script>";
        //header('Location:Billboard.php');
        //exit;
    } 
    else
    {
        echo"<script>window.location.href = 'Billboard.php'</script>";
        //die("Enter all fields please!!");
    }
}
else
{
    die("Error in Submission!!");
}

?>