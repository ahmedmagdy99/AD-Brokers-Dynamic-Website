<?php session_start() ?>
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
    $price = $_POST["price"];
    $location = $_POST["location"];
    $company = $_POST["Cname"];
    $phone = $_POST["Pnumber"];
    $state = $_POST["state"];
    $file_to_saved = "images/".$file_get;

    $id = $_SESSION['userID'];
    move_uploaded_file($temp, $file_to_saved);

    if($price && $location && $company && $phone && $state)
    {
        $query = "INSERT INTO billboards(companyID,price,Blocation,company,phone,Bstate,img) VALUES ('$id','$price','$location','$company','$phone','$state','".$file_to_saved."')";
        mysqli_query($connection,$query);
        echo"<script>alert('Product added Successfully')</script>";
        echo"<script>window.location.href = 'Billboard.php'</script>";
        //header('Location:Billboard.php');
        exit;
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