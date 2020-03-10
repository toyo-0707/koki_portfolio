<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Diving Tour</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="view/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="view/css/animate.css">
    
    <link rel="stylesheet" href="view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="view/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="view/css/magnific-popup.css">

    <link rel="stylesheet" href="view/css/aos.css">

    <link rel="stylesheet" href="view/css/ionicons.min.css">

    <link rel="stylesheet" href="view/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="view/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="view/css/flaticon.css">
    <link rel="stylesheet" href="view/css/icomoon.css">
    <link rel="stylesheet" href="view/css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="login.php">Diving</a>

	    </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(view/images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Welcome To Diving</h1>
	            <h2>Diving Tours</h2>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <form action="action/userAction.php" method="post">
    <div class="card w-75 mx-auto mt-5 mb-5 ">
      <div class="card-header bg-primary text-white ">
      <h1 class="display-4 ml-3 py-5">Welcome to Diving</h1>
      </div>
      <div class="card-body py-5 ">
        <small>Username</small>
        <input type="text" name ="username" class="form-control mb-5">

        <small>Password</small>
        <input type="password" name ="password" class="form-control mb-3">

        <small><a href="view/register.php">Create Account</a></small>
        <button type="submit" class="btn btn-primary float-right" name="login">Log In</button>
      </div>
    </div>
  </form>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="view/js/jquery.min.js"></script>
  <script src="view/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="view/js/popper.min.js"></script>
  <script src="view/js/bootstrap.min.js"></script>
  <script src="view/js/jquery.easing.1.3.js"></script>
  <script src="view/js/jquery.waypoints.min.js"></script>
  <script src="view/js/jquery.stellar.min.js"></script>
  <script src="view/js/owl.carousel.min.js"></script>
  <script src="view/js/jquery.magnific-popup.min.js"></script>
  <script src="view/js/aos.js"></script>
  <script src="view/js/jquery.animateNumber.min.js"></script>
  <script src="view/js/bootstrap-datepicker.js"></script>
  <script src="view/js/jquery.timepicker.min.js"></script>
  <script src="view/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="view/js/google-map.js"></script>
  <script src="view/js/main.js"></script>
    
  </body>
</html>