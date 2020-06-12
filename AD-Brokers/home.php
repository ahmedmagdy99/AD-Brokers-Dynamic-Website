<?php session_start(); ?>

<?php 
  if(isset($_SESSION['userID']))
  {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/logo1.png">
<title>Homepage</title> 
      <!-- Bootstrap core CSS -->
  <link href="css/navbar//bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="css/navbar/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/navbar/agency.min.css" rel="stylesheet">

  <!--Counter-->
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/homestyle.css" rel="stylesheet">
  <style>
  /*Counter*/
.back{
/*background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));*/
background-image: linear-gradient(#2c3e50,#17212b );
height: 500px;
}
.ct{
  padding-top: 60px;
}

.counter-box {
    display: block;
    background: #f6f6f6;
    padding: 40px 20px 37px;
    text-align: center
}

.counter-box p {
    margin: 5px 0 0;
    padding: 0;
    color: #909090;
    font-size: 18px;
    font-weight: 500
}

.counter-box i {
    font-size: 60px;
    margin: 0 0 15px;
    color: #d2d2d2
}

.counter {
    display: block;
    font-size: 32px;
    font-weight: 700;
    color: #666;
    line-height: 28px
}

.counter-box.colored {
    background: #3acf87
}

.counter-box.colored p,
.counter-box.colored i,
.counter-box.colored .counter {
    color: #fff
}
  /*Counter*/

  </style>
  <!--Counter-->
</head>
<body>
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
            <a class="nav-link js-scroll-trigger" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Billboard.php">Products</a>
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

  
  <header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="images/vid.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center" id=" overlayText">
        <div class="container">
          <h1 class="text-center" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 65px; color: rgba(255, 255, 255, 0.87);">Spread your ADs with One click</h1>
          <hr class="divider my-4" width="30px" style="border: tomato solid 2px ; border-radius: 5px;">
          <p class="lead text-center di" style="font-size: 20px; color: rgba(255,255,255,.75);">A single App for all your advertising purpose. Select and upload Easily with our smart App.there is no need today for workers,saving your precious time</p>
          
        </div>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services" style="background-color:rgba(255, 255, 255, 0.87);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <h4 class="service-heading">E-Commerce</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">

          <h4 class="service-heading">Technological Billboards</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
        <div class="col-md-4">

          <h4 class="service-heading">Rent Billboards</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
        </div>
      </div>
    </div>
  </section>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active" style="background-image: url('images/imageee.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">New York</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('images/finalll.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Los Angeles</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>

      <div class="carousel-item" style="background-image: url('images//Finall.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">chicago</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
<!--Counter-->
<div class="back">
  <h1 style="color: white; text-align: center; padding-top: 50px;">Customer Satisfaction</h1>
<div class="container ct">
  <div class="row">
      <div class="four col-md-3">
          <div class="counter-box colored"> <i class="fa fa-thumbs-o-up"></i> <span class="counter">1000</span>
              <p>Happy Customers</p>
          </div>
      </div>
      <div class="four col-md-3">
          <div class="counter-box"> <i class="fa fa-group"></i> <span class="counter">1500</span>
              <p>Registered Members</p>
          </div>
      </div>
      <div class="four col-md-3">
          <div class="counter-box"> <i class="fa fa-shopping-cart"></i> <span class="counter">289</span>
              <p>Available Products</p>
          </div>
      </div>
      <div class="four col-md-3">
          <div class="counter-box"> <i class="fa fa-user"></i> <span class="counter">500</span>
              <p>Rent Billboards</p>
          </div>
      </div>
  </div>
</div>
</div>
<!--Counter-->

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

  
  
  <!-- Bootstrap core JavaScript -->
  <script src="js/navbar/jquery.min.js"></script>
  <script src="js/navbar/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/navbar/agency.min.js"></script>

  <script src="js/jquery.slim.min.js"></script>

  <!--Counter-->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script src="js/homejs.js"></script>
  <!--Counter-->

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