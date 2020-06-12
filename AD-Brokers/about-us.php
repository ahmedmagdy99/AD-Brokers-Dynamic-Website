<?php session_start(); ?>

<?php 
  if(isset($_SESSION['userID']))
  {
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <link rel="icon" href="images/logo1.png">
    <title>About us</title> 
      <link href="css/navbar//bootstrap.min.css" rel="stylesheet">

      <!-- Custom fonts for this template -->
      <link href="css/navbar/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
      <!-- Custom styles for this template -->
      <link href="css/navbar/agency.min.css" rel="stylesheet">

      <link href="css/fontawesome.min.css" rel="stylesheet">
    
      <link href="css/about-us.css" rel="stylesheet">
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
              <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Billboard.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">About us</a>
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

        <div class="bg-dark">
          <div class="container py-5">
            <div class="row h-100 align-items-center py-5">
              <div class="col-lg-6">
                <h1 class="display-4" style="color: #eee;">AD-Brokers</h1>
                <p class="lead mb-0" style="color: #eee;">Purchase your Billboard with only one click</p>
                <p class="lead">AD-Brokers <a href="home.php" class="text-muted"> 
                            <u>Create your AD</u></a>
                </p>
              </div>
              <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
            </div>
          </div>
        </div>
        
        <div class="bg-white py-5">
          <div class="container py-5">
            <div class="row align-items-center mb-5">
              <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                <h2 class="font-weight-light">Spread your company's Billboards</h2>
                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
            </div>
            <div class="row align-items-center">
              <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
              <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                <h2 class="font-weight-light">Purchase your beloved billboard and put your AD</h2>
                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="bg-light py-5">
          <div class="container py-5">
            <div class="row mb-4">
              <div class="col-lg-5">
                <h2 class="display-4 font-weight-light">Our team</h2>
                <p class="font-italic text-muted">Students in level 3 at Faculty of Computers and Artifitial Intelligence</p>
              </div>
            </div>
        
            <div class="row text-center">
              <!-- Team item-->
              <div class="col-xl-3 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-2_f8dowd.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                  <h5 class="mb-0">Ahmed Magdy</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                </div>
              </div>
              <!-- End-->
        
              <!-- Team item-->
              <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                  <h5 class="mb-0">Ahmed Mostafa</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                </div>
              </div>
              <!-- End-->
        
              <!-- Team item-->
              <div class="col-xl-3 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-1_s02nlg.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                  <h5 class="mb-0">Ahmed Ibrahim</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                </div>
              </div>
              <!-- End-->
        
              <!-- Team item-->
              <div class="col-xl-3 col-sm-6 mb-5">
                  <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                  <h5 class="mb-0">Mahmoud Abozaid</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                </div>
              </div>
              <!-- End-->
        
            </div>
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
