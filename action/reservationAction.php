<?php
  require_once '../class/Reservation.php';
  $reservation = new Reservation();


  if(isset($_POST['reservation'])){
    $reservation_day = $_POST['reservation_day'];
    $reservation_name =$_POST['reservation_name'];
    $reservation_email = $_POST['reservation_email'];
    $reservation_phone = $_POST['reservation_phone'];
    $reservation_address = $_POST['reservation_address'];
    $reservation_rental = $_POST['reservation_rental'];
    $tour_id = $_POST['tour_id'];
    $user_id = $_SESSION['login_id'];

    $today = date('Y-m-d');
    // echo $today;
    // echo $reservation_day;
    if($reservation_day <= $today ){
      echo "<div class='alert alert-danger text-center' role='alert'>
       <strong>RESERVATION DATE HAS PASSED</strong>
      </div>";
    }else{
      // echo "Good";
       $reservation->createReservation($reservation_day, $reservation_name, $reservation_email, $reservation_phone, $reservation_address, $reservation_rental, $tour_id, $user_id);
    }

    

   
  }