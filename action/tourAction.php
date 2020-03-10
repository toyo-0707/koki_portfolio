<?php
  require_once '../class/Tour.php';
  $tour = new Tour();


  if(isset($_POST['addtour'])){
    $tour_id = $_POST['tour_id'];
    $tour_name = $_POST['tour_name'];
    $tour_price =$_POST['tour_price'];

    $tour->createTour($tour_name , $tour_price);
    header("Location: ../view/adminhome.php");
  }

  
?>
