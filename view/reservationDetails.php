<?php
 include "../action/reservationAction.php" ;
 include "../action/tourAction.php" ;

 $tour_id = $_GET['tour_id'];
 $reservation_id = $_GET['reservation_id'];

  $tour_detail = $tour->getSpecificTour($tour_id);
  $reservation_detail = $reservation->getReservationDetails($reservation_id);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Diving Infomation</title>
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
	      <a class="navbar-brand" href="home.php">Diving</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="adminhome.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="adminaddtour.php" class="nav-link">AddTours</a></li>
            <li class="nav-item active"><a href="mytour.php" class="nav-link">MyTours</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-danger ">  Logout</a><li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('../upload/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span class="mr-2"><a href="tour.php">Tour</a></span> <span>Tour Detailes</span></p>
	            <h1 class="mb-4 bread">Tour Detailes</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    

<!-- 
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<h2 class="mb-4">///h2>
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="tour-img" style="background-image: url(images/tour-1.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="tour-img" style="background-image: url(images/tour-2.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="tour-img" style="background-image: url(images/tour-3.jpg);"></div>
          				</div>
          			</div>
              </div>
              </div>
          </div>  .col-md-8 
        </div>
      </div>
    </section>  -->

    <div class="container">
     <div class="row ">
      <div class="card mx-auto col-12 my-5 border border-0">
       <div class="card-body">
         <div class="ftco-section  bg-light text-center">
          <h2 class="mb-5">Tour Detaile</h2>
          <table class="table table-striped table-hover w-75 mx-auto">
          <thead class="thead thead-dark">
            <th colspan=2>RESERVATION DETAILS</th>
          </thead>
            <tbody>
            
            <tr>
              <th>Tour: </th>
              <td><h5><?php echo $tour_detail['tour_name'];?></h3></td>
            </tr>
              <th>Reserve Date: </th>
              <td><h5><?php echo $reservation_detail['reservation_day']?></h3></td>
            </tr>
            <tr>
              <th>Name: </th>
              <td><h5><?php echo $reservation_detail['reservation_name']?></h3></td>
            </tr>
            <tr>
              <th>Email: </th>
              <td><h5><?php echo $reservation_detail['reservation_email']?></h3></td>
            </tr>
            <tr>
              <th>Phone Number: </th>
              <td><h5><?php echo $reservation_detail['reservation_phone']?></h3></td>
            </tr>
            <tr>
              <th>Address: </th>
              <td><h5><?php echo $reservation_detail['reservation_address']?></h3></td>
            </tr>
            <tr>
              <th>Rental: </th>
              <td><h5><?php echo $reservation_detail['reservation_rental']?></h3></td>
            </tr>
            <tr>
              <th>Price: </th>
              <td><h5><?php echo $tour_detail['tour_price'];?></h3></td>
            </tr>
            
            </tbody>
          </table>
          <a href="mytour.php" role='button' class='btn btn-outline-primary mr-3 mt-3'>Back</a>
          <a href='reservationdelete.php?reservation_id=<?php echo $reservation_id?>' role='button' class='btn btn-outline-danger mt-3'>Cancel</a>
         </div>  
       </div>
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