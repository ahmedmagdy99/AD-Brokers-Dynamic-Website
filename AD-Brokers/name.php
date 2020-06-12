<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $connection = mysqli_connect("localhost","root","","adbrokers");
      $query = "SELECT Email FROM users";
      $result = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($result))
        {
            $Email = $row["Email"];
            if($_SESSION['userID'] == $row['companyID'])
            {
            echo"<h1>Hello,$Email</h1>";
            }
        }
        ?>
</body>
</html>