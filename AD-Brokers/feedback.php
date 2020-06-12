<?php session_start(); ?>

<?php 
  if(isset($_SESSION['userID']))
  {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/logo1.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Feedback</title>
    
    <!-- Feedback -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/feedbackstyle.css" rel="stylesheet">
    
 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Feedback -->

    <!--Fonts-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!--Fonts-->

    <!--CSS(nav)-->
    <link href="css/navbar/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar/agency.min.css" rel="stylesheet">
    <!--CSS(nav)-->

</head>
 
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">AD-Brokers</a> -->
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
            <a class="nav-link js-scroll-trigger" href="Billboard.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="about-us.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <!-- Navigation -->
  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('img/test.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
        
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
            
          <div class="col-md-6 mb-4 white-text text-center text-md-left">
              <br>
              <br>
            <h1 class="display-4 font-weight-bold">Your Feedback is Important to us</h1>

            <hr class="hr-light">

            <p>
              <strong>Spread Your ADS Simply</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>Simple,yet effective way to spread your ads.a one simple click is need to show the world your vision and innovation.feel free to write to us for any feedback or complains </strong>
            </p>

          </div>
          <!--Grid column-->

          <!--Grid column-->
            
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
              <br>
              <br>
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <form name="" action="message.php" method="POST">
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Write your Feedback</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form3" class="form-control" placeholder="Your name" name="name">
                  </div>
                  <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" id="form2" class="form-control" placeholder="Your email" name="email">
                  </div>

                  <div class="md-form">
                    <i class="fa fa-pencil prefix grey-text"></i>
                    <textarea type="text" id="form8" class="md-textarea" placeholder="Your message" name="message"></textarea>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-indigo" type="submit" name="submit">Send</button>
                    <hr>
                    <fieldset class="form-check" style="border: 0;">
                      <input type="checkbox" class="form-check-input" id="checkbox1">
                      <label for="checkbox1" class="form-check-label dark-grey-text">Subscribe me to the newsletter</label>
                    </fieldset>
                  </div>

                </form>
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
<!-- Full Page Intro -->
                      
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
</body>

</html>
<?php
  }
  else
  {
        echo"<script>alert('Sorry You should login first')</script>";
        echo"<script>window.location.href = 'index.php'</script>";
  }

  ?>
