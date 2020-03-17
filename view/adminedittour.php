<?php
  include '../action/tourAction.php';

  $tour_id = $_GET['tour_id'];

  $tour_detail = $tour->getSpecificTour($tour_id);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Diving Tours</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="adminhome.php">Diving</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="adminhome.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="adminaddtour.php" class="nav-link">AddTours</a></li>
            <li class="nav-item"><a href="adminreservatelist.php" class="nav-link">UserTour</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-danger ">  Logout</a><li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('../upload/cebu-1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="adminhome.php">Home</a></span> <span>EditTours</span></p>
	            <h1 class="mb-4 bread">Tours</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
  <div class="card mx-auto w-50 my-5 border border-0">
    <div class="card-header bg-white text-dark border-0">
      <h2 class="text-center">editTour</h2>
    </div>
    <div class="card-body">
      <form action="../action/tourAction.php" enctype="multipart/form-data" method="post">
      <div class="form-row">
          <div class="form-group col-12 mt-3">
            <input type="text" name="newtour_name" id="" class="p-4 form-control"value="<?php echo $tour_detail['tour_name'];?>" required>
          </div>
        </div>
      <div class="form-row">
          <div class="form-group col-12 mt-3">
            <input type="text" name="newtour_price" id="" class="p-4 form-control" value="<?php echo $tour_detail['tour_price'];?>"  required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-12 mt-3">
            <label for="tour_info">info</label>
            <textarea class="form-control" name="newtour_info" id="" rows="7" ><?php echo $tour_detail['tour_info'];?> </textarea>
          </div>
        </div>
        <div class="form-row">
          <input type="file" name="pic" class="form-control  ml-1 mt-3"><br>
        </div>
        <div class="form-row">
          <div class="form-group col-12 mt-4">
          <button type="submit" name="update" id="" class="btn btn-success form-control text-uppercase">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
    			


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


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>