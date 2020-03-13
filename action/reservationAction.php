<?php
  require_once '../class/Reservation.php';
  $reservation = new Reservation();
  session_start();


  if(isset($_POST['reservation'])){
    $reservation_day = $_POST['reservation_day'];
    $reservation_name =$_POST['reservation_name'];
    $reservation_email = $_POST['reservation_email'];
    $reservation_phone = $_POST['reservation_phone'];
    $reservation_address = $_POST['reservation_address'];
    $reservation_rental = $_POST['reservation_rental'];
    $tour_id = $_POST['tour_id'];
    $user_id = $_SESSION['login_id'];

    $reservation->createReservation($reservation_day, $reservation_name, $reservation_email, $reservation_phone, $reservation_address, $reservation_rental, $tour_id, $user_id);
  }