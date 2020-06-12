<?php session_start() ?>
<?php 
unset($_SESSION['userID']); 
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="icon" href="images/logo1.png">
    <title>AD-Brokers</title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Validation -->
      <script src="js/ValidateUsignup.js"></script>
    <!-- Validation(end) -->
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-custom">
    <a class="navbar-brand" href="#" style="margin: 0 auto; color: white; font-family: Georgia, 'Times New Roman', Times, serif; font-weight: 500;">
      <span class="change"><img src="Images/logo1.png" width="90" height="70" alt=""></span>
    </a>
  </nav>
  <div id="logreg-forms">
    <!-- Signin -->
    <form class="form-signin" class="shadow-lg p-3 mb-5 bg-white rounded" action="signin.php" method="POST" onsubmit="return(validateUS())">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
        <div class="social-login">
            <a href="https://www.facebook.com" class="d-inline"><button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button></a>
            <a href="https://www.gmail.com" class="d-inline"><button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button></a>
        </div>
        <p style="text-align:center"> OR  </p>
        <input type="email" id="inputEmail" class="form-control" name="email" id="Siemail" placeholder="Email address" required autofocus="">
        <input type="password" id="inputPassword" class="form-control" name="password" id="Sipassword" placeholder="Password" required>
        
        <button class="btn btn-success btn-block" type="submit" name="Usubmit"><i class="fas fa-sign-in-alt"></i> Sign in as User</button>
        <button class="btn btn-success btn-block" type="submit" name="Csubmit"><i class="fas fa-sign-in-alt"></i> Sign in as Company</button>

        <a href="#" id="forgot_pswd">Forgot password?</a>
        <hr> 
          <!-- Modal -->
        </form>
      <!-- Signin(end) -->

      <!-- User Signup -->
        <form action="signup.php" method="POST" style="margin-top: -30px;" onsubmit="return(validateU())">
          <div class="container">
            <!-- LOGIN MODAL TRIGGER -->
            <button class="btn btn-primary  btn-block" data-toggle="modal" data-target="#signupModal" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up as User</button>
  
            <!-- LOGIN MODAL -->
            <div class="modal" id="signupModal">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Add your info</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form action="signup.php" method="POST" onsubmit="return(validateU())">
                    <div class="form-group row">
                        <div class="col">
                        <label for="Price">First Name</label>
                        <input type="text" placeholder="First name" class="form-control" name="Fname" id="Fname">
                        </div>
                        <div class="col">
                            <label for="password">Last Name</label>
                            <input type="text" placeholder="Last name" class="form-control" name="Lname" id="Lname">
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="Location">Phone Number</label>
                        <input type="text" placeholder="01*********" class="form-control" name="Pnumber" id="Pnumber">
                      </div>
                      <div class="form-group">
                        <label for="Phone">Email</label>
                        <input type="email" placeholder="email@adress.com" class="form-control" name="email" id="email">
                      </div>
                      <div class="form-group">
                        <label for="state">Password</label>
                        <input type="password" placeholder="New password" class="form-control" name="password" id="password">
                      </div>
                      <div class="modal-footer">
                          <input class="btn btn-primary" type="submit" name="Usignup" value="SIGN UP" id="Usignup">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </form>
        <!-- User Signup(end) -->

        <!-- Company Signup -->
        <form action="signup.php" method="POST" style="margin-top: -20px;" onsubmit="return(validateC())">
          <div class="container">
            <!-- LOGIN MODAL TRIGGER -->
            <button class="btn btn-primary  btn-block" data-toggle="modal" data-target="#CsignupModal" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up as Company</button>
  
            <!-- LOGIN MODAL -->
            <div class="modal" id="CsignupModal">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Add your Company info</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form action="signup.php" method="POST" onsubmit="return(validateC())">
                    <div class="form-group row">
                        <div class="col">
                        <label for="Price">Company Name</label>
                        <input type="text" placeholder="Company name" class="form-control" name="Cname" id="Cname">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="Location">Company adress</label>
                      <input type="text" placeholder="Company adress" class="form-control" name="Clocation" id="Clocation">
                    </div>
                      <div class="form-group">
                        <label for="Location">Phone Number</label>
                        <input type="text" placeholder="01*********" class="form-control" name="Cnumber" id="Cnumber">
                      </div>
                      <div class="form-group">
                        <label for="Phone">Email</label>
                        <input type="email" placeholder="email@adress.com" class="form-control" name="Cemail" id="Cemail">
                      </div>
                      <div class="form-group">
                        <label for="state">Password</label>
                        <input type="password" placeholder="New password" class="form-control" name="Cpassword" id="Cpassword">
                      </div>
                      <div class="modal-footer">
                          <input class="btn btn-primary" type="submit" name="Csignup" value="SIGN UP" id="Csignup">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </form>
        <!-- Company Signup(end) -->
</div>

 <!----------- Footer ------------>
<div>
  <section style="height:10px;"></section>
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
 <!----------- Footer ------------>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/script.js"></script>

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