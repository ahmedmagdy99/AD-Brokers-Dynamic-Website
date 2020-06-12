<?php session_start(); ?>
<!-- Check if the logged in is user or company -->
<?php 

  $connection = mysqli_connect("localhost","root","","adbrokers");

  $foundis = -1;
  $queryUS = "SELECT * FROM users";
  $resultUS = mysqli_query($connection,$queryUS);
  while($rowUS = mysqli_fetch_assoc($resultUS))
  {
    if($_SESSION['userID'] == $rowUS["Uid"])
    {
      $foundis = 1;
    }
  }

  $queryCO = "SELECT * FROM companies";
  $resultCO = mysqli_query($connection,$queryCO);
  while($rowCO = mysqli_fetch_assoc($resultCO))
  {
    if($_SESSION['userID'] == $rowCO["Cid"])
    {
      $foundis = 0;
    }
  }

?>
<!-- Check if the logged in is user or company -->
<?php 
  if(isset($_SESSION['userID']) && $foundis==0)
  {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/logo1.png">
    <title>Billboards</title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/Billboardstyle.css">

    <!-- Navbar -->
    <link href="css/navbar//bootstrap.min.css" rel="stylesheet">

<link href="css/navbar/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<link href="css/navbar/agency.min.css" rel="stylesheet">
    <!-- Navbar -->

<!-- Validation -->
<script src="validateBillboard.js"></script>
<!-- Validation(end) -->
</head>
<body>
    <!-- Page Content -->
    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="home.php">
        AD-Brokers <img src="Images/logo1.png" width="30" height="30" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="about-us.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="feedback.php">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
<!-- Navigation -->

<div style="height: 200px;"></div>

<div class="jumbotron jumbotron-fluid" style="background-color: #BFBCBA">
  <div class="container" style="background-color: #BFBCBA">
    <h1 class="display-3 text-center">Spread your ADs with One click</h1>
<!-- Add Modal -->
<div class="container">
<!-- LOGIN MODAL TRIGGER -->
<button class="btn btn-dark btn-block" data-toggle="modal" data-target="#addModal">Add Billboard</button>

<!-- LOGIN MODAL -->
<div class="modal" id="addModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add your Billboard Info</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="addBillboard.php" method="POST" enctype="multipart/form-data" onsubmit="return(validateADD())">
        <div class="form-group row">
            <div class="col">
            <label for="Price">Price</label>
            <input type="text" placeholder="Billboard Price" class="form-control" name="price" id="price">
            </div>
            <div class="col">
                <label for="password">Company Name</label>
                <input type="text" placeholder="Company Name" class="form-control" name="Cname" id="Cname">
            </div>
        </div>
          <div class="form-group">
            <label for="Location">Location</label>
            <input type="text" placeholder="Location" class="form-control" name="location" id="location">
          </div>
          <div class="form-group">
            <label for="Phone">Phone Number</label>
            <input type="text" placeholder="01*********" class="form-control" name="Pnumber" id="Pnumber">
          </div>
          <div class="form-group">
            <label for="state">State of the Billboard</label>
            <input type="text" placeholder="Available/Rent" class="form-control" name="state" id="state">
          </div>
          <div class="form-group">
            <label for="Billboard Image">Billboard image</label>
            <input type="file" class="form-control-file" name="image" id="image">
          </div>
          <div class="modal-footer">
              <input class="btn btn-primary" type="submit" name="submit" value="ADD">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<div style="height:10px;"></div>
<!-- Modal -->

<!-- Update Modal -->
<div class="container">
<!-- LOGIN MODAL TRIGGER -->
<button class="btn btn-dark btn-block" data-toggle="modal" data-target="#UpdateModal">Update Billboard</button>

<!-- LOGIN MODAL -->
<div class="modal" id="UpdateModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update your Billboard Info</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="updateBillboard.php" method="POST" enctype="multipart/form-data" onsubmit="return(validateUPDATE())">
        <div class="form-group">
            <label for="ID">Select ID of billboard you want to update its info</label>
            <select name="id" id="">
            <?php
    /*
    if (empty($_POST)){
        exit;
     }
     */
    $connection = mysqli_connect("localhost","root","","adbrokers");
    $query = "SELECT * FROM billboards";
    $result = mysqli_query($connection,$query);
    if($connection)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $id = $row["Cid"];
            if($_SESSION['userID'] == $row['companyID'])
            {
            echo"<option value='$id'> $id </option>";
            }
        }
    }
    else
    {
        die("Error in connection!!");
    }
?>    
            </select>
          </div>
        <div class="form-group row">
            <div class="col">
                <label for="Price">Price</label>
                <input type="text" placeholder="Billboard Price" class="form-control" name="price" id="uprice">
            </div>
            <div class="col">
                <label for="password">Company Name</label>
                <input type="text" placeholder="Company Name" class="form-control" name="Cname" id="uCname">
            </div>
        </div>
          <div class="form-group">
            <label for="Location">Location</label>
            <input type="text" placeholder="Location" class="form-control" name="location" id="ulocation">
          </div>
          <div class="form-group">
            <label for="Phone">Phone Number</label>
            <input type="text" placeholder="01*********" class="form-control" name="Pnumber" id="uPnumber">
          </div>
          <div class="form-group">
            <label for="state">State of the Billboard</label>
            <input type="text" placeholder="Available/Rent" class="form-control" name="state" id="ustate">
          </div>
          <div class="form-group">
            <label for="Billboard Image">Billboard image</label>
            <input type="file" class="form-control-file" name="image" id="uimage">
          </div>
          <div class="modal-footer">
              <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Update Modal -->

<div style="height:10px;"></div>

<!-- Delete Modal -->
<div class="container">
<!-- LOGIN MODAL TRIGGER -->
<button class="btn btn-dark btn-block" data-toggle="modal" data-target="#DeleteModal">Delete Billboard</button>

<!-- LOGIN MODAL -->
<div class="modal" id="DeleteModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete your Billboard Info</h5>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="deleteBillboard.php" method="POST">
        <div class="form-group">
            <label for="ID">Select ID of billboard you want to Delete its info</label>
            <select name="id" id="">
            <?php
    /*
    if (empty($_POST)){
        exit;
     }
     */
    $connection = mysqli_connect("localhost","root","","adbrokers");
    $query = "SELECT * FROM billboards";
    $result = mysqli_query($connection,$query);
    if($connection)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $id = $row["Cid"];
            if($_SESSION['userID'] == $row['companyID'])
            {
            echo"<option value='$id'> $id </option>";
            }
        }
    }
    else
    {
        die("Error in connection!!");
    }
?>    
            </select>
          </div>
          <div class="modal-footer">
              <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Delete Modal -->
  </div>
</div>


<div class='container'>
    <div class='row'>
<?php
    /*
    if (empty($_POST)){
        exit;
     }
     */
    $connection = mysqli_connect("localhost","root","","adbrokers");
    $query = "SELECT * FROM billboards";
    $result = mysqli_query($connection,$query);
    if($connection)
    {
  
        while($row = mysqli_fetch_assoc($result))
        {
            $id = $row["Cid"];
            $price = $row["price"];
            $location = $row["Blocation"];
            $company = $row["company"];
            $phone = $row["phone"];
            $state = $row["Bstate"];
            $image = $row["img"];
            if($_SESSION['userID'] == $row["companyID"])
            {
              echo"
              <div class='col-lg-4 col-sm-6 mb-4'>
                <div class='card h-100'>
                  <a href='#'><img class='card-img-top' src='$image' alt='' width='100' height='300'></a>
                  <div class='card-body'>
                    <h5 style='font-size: 15px;'>Billboard id: $id</h5>
                    <h5 style='font-size: 15px;'>Price: $price</h5>
                    <h5 style='font-size: 15px;'>Location: $location</h5>
                    <h5 style='font-size: 15px;'>Company Name: $company</h5>
                    <h5 style='font-size: 15px;'>Phone Number: $phone</h5>
                    <h5 style='font-size: 15px;'>State of billboard: $state</h5>
                  </div>
                </div>
              </div>
                      ";
                      continue;
            }
            echo"
      <div class='col-lg-4 col-sm-6 mb-4'>
        <div class='card h-100'>
          <a href='#'><img class='card-img-top' src='$image' alt='' width='100' height='300'></a>
          <div class='card-body'>
            <h5 style='font-size: 15px;'>Price: $price</h5>
            <h5 style='font-size: 15px;'>Location: $location</h5>
            <h5 style='font-size: 15px;'>Company Name: $company</h5>
            <h5 style='font-size: 15px;'>Phone Number: $phone</h5>
            <h5 style='font-size: 15px;'>State of billboard: $state</h5>
          </div>
        </div>
      </div>
 ";
            
        }
    }
    else
    {
        die("Error in connection!!");
    }
?>    
    </div>
  </div>

       <!----------- Footer ------------>
<div>
    <footer class="footer-bs">
        <div class="row">
          <div class="col-md-5 footer-brand animated fadeInLeft">
            <a class="navbar-brand" href="#">
              AD-Brokers<img src="Images/logo1.png" width="30" height="30" alt="">
            </a>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2014 BS3 UI Kit, All rights reserved</p>
            </div>
          <div class="col-md-4 footer-nav animated fadeInUp">
              <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-2 footer-social animated fadeInDown">
              <h4>Follow Us</h4>
              <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">RSS</a></li>
                </ul>
              </div>
        </div>
    </footer>
</div>

  <script src="js/navbar/jquery.min.js"></script>
  <script src="js/navbar/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/navbar/agency.min.js"></script>

  <script src="js/jquery.slim.min.js"></script>

  <!-- Modal -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
  <!-- Modal -->
</body>
</html>
<?php
  }
  elseif(isset($_SESSION['userID']) && $foundis==1)
  {
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/logo1.png">
    <title>Billboards</title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/Billboardstyle.css">

    <!-- Navbar -->
    <link href="css/navbar//bootstrap.min.css" rel="stylesheet">
<link href="css/navbar/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<link href="css/navbar/agency.min.css" rel="stylesheet">
    <!-- Navbar -->
</head>
<body>
    <!-- Page Content -->
    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="home.php">
        AD-Brokers <img src="Images/logo1.png" width="30" height="30" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="about-us.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="feedback.php">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
<!-- Navigation -->

<div style="height: 200px;"></div>

<div class="jumbotron jumbotron-fluid" style="background-color: #BFBCBA">
  <div class="container" style="background-color: #BFBCBA">
    <h1 class="display-3 text-center">Spread your ADs with One click</h1>
  </div>
</div>

<div class='container'>
    <div class='row'>
<?php
    /*
    if (empty($_POST)){
        exit;
     }
     */
    $connection = mysqli_connect("localhost","root","","adbrokers");
    $query = "SELECT * FROM billboards";
    $result = mysqli_query($connection,$query);
    if($connection)
    {
  
        while($row = mysqli_fetch_assoc($result))
        {
            $price = $row["price"];
            $location = $row["Blocation"];
            $company = $row["company"];
            $phone = $row["phone"];
            $state = $row["Bstate"];
            $image = $row["img"];
            echo"
      <div class='col-lg-4 col-sm-6 mb-4'>
        <div class='card h-100'>
          <a href='#'><img class='card-img-top' src='$image' alt='' width='100' height='300'></a>
          <div class='card-body'>
            <h5 style='font-size: 15px;'>Price: $price</h5>
            <h5 style='font-size: 15px;'>Location: $location</h5>
            <h5 style='font-size: 15px;'>Company Name: $company</h5>
            <h5 style='font-size: 15px;'>Phone Number: $phone</h5>
            <h5 style='font-size: 15px;'>State of billboard: $state</h5>
            <button type='button' class='btn btn-light' style='background-color: #007bff; border: 0; color:white;'>Purchase</button>
          </div>
        </div>
      </div>
 ";
        }
    }
    else
    {
        die("Error in connection!!");
    }
?>    
    </div>
  </div>

       <!----------- Footer ------------>
<div>
    <footer class="footer-bs">
        <div class="row">
          <div class="col-md-5 footer-brand animated fadeInLeft">
            <a class="navbar-brand" href="#">
              AD-Brokers<img src="Images/logo1.png" width="30" height="30" alt="">
            </a>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2014 BS3 UI Kit, All rights reserved</p>
            </div>
          <div class="col-md-4 footer-nav animated fadeInUp">
              <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-2 footer-social animated fadeInDown">
              <h4>Follow Us</h4>
              <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">RSS</a></li>
                </ul>
              </div>
        </div>
    </footer>
</div>

  <script src="js/navbar/jquery.min.js"></script>
  <script src="js/navbar/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/navbar/agency.min.js"></script>

  <script src="js/jquery.slim.min.js"></script>

  <!-- Modal -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
  <!-- Modal -->
</body>
</html>

<?php
  }else
  {
        echo"<script>alert('Sorry You should login first')</script>";
        echo"<script>window.location.href = 'index.php'</script>";
  }
?>