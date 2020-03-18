<?php
 include "../action/tourAction.php" ;

 if(empty($_SESSION['status']=='A')){
  session_unset();
  session_destroy();
  header('Location: ../login.php');
  die;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Diving Tour</title>
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
	          <li class="nav-item active"><a href="adminhome.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="adminaddtour.php" class="nav-link">AddTours</a></li>
            <li class="nav-item"><a href="adminreservatelist.php" class="nav-link">UserTour</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-danger ">  Logout</a><li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url('../upload/cebu-1.jpg');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Diving Management</h1>
	            <h2>Diving Tours</h2>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Tours</h2>
          </div>
        </div>    		
    		<div class="row">
        <?php
      $tourlist = $tour->getTours();
      foreach($tourlist as $tour){
        $tourID = $tour['tour_id'];
        $image = $tour['tour_picture'];
         ?>
    			<div class='col-sm col-md-6 col-lg-4 ftco-animate'>
    				<div class='tour'>
    					<a href='admintours-single.php?tour_id=<?php echo $tourID?>' class='img d-flex justify-content-center align-items-center'>
              <?php echo "<img src='../upload/$image' class='img-fluid'>"; ?>
    					</a>
    					<div class='text p-3 text-center'>
    						<h3 class='mb-3'><a href='admintours-single.php?tour_id=<?php echo $tourID?>'><?php echo $tour['tour_name'];?></a></h3>
    						<p><span class='price mr-2'><?php echo $tour['tour_price'];?></span></p>
    						<hr>
    						<p class='pt-1'><a href='admintours-single.php?tour_id=<?php echo $tourID?>' class='btn-custom'>View tour Details <span class='icon-long-arrow-right'></span></a></p>
                <td><a href='adminedittour.php?tour_id=<?php echo $tourID?>' role='button' class='btn btn-outline-success'>Edit</a></td>
                <td><a href='admindeletetour.php?tour_id=<?php echo $tourID?>' role='button' class='btn btn-outline-danger'>Delete</a></td>
    					</div>
    				</div>
    			</div>
          <?php }?>
    		</div>
    	</div>
    </section>


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