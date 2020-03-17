<?php
  require_once '../class/Tour.php';
  $tour = new Tour();


  if(isset($_POST['addtour'])){
    $tour_name = $_POST['tour_name'];
    $tour_price =$_POST['tour_price'];
    $tour_info =$_POST['tour_info'];
    $picture = $_FILES['pic']['name'];
    $target_dir = "../upload/"; //folder in your computer where you will place the picture
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);

    // echo $tour_name, $tour_price, $tour_info, $picture;


    $add_tour = $tour->createTour($tour_name, $tour_price, $tour_info, $picture);

    if($add_tour == 1){
      // Upload file
      move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
      //move_uploaded_file ~~~ transfers the picture from one location
      // to another location
      // header("Location: ../view/adminhome.php");
    }else{
        echo "Error";
    }

  }elseif(isset($_POST['update'])){
    $tour_id = $_POST['tour_id'];
    $newtour_name = $_POST['new_tour_name'];
    $newtour_price = $_POST['new_tour_price'];
    $newtour_info = $_POST['new_tour_info'];

    if(empty($_FILES['pic']['name'])){
      $newtour_picture = $_POST['old_tour_picture'];
    }else{
      $newtour_picture = $_FILES['pic']['name'];
      $target_dir = "../upload/"; //folder in your computer where you will place the picture
      $target_file = $target_dir . basename($_FILES["pic"]["name"]);
    }


    // echo $tour_id, $newtour_name, $newtour_price, $newtour_info, $newtour_picture;
    $update_tour = $tour->editTour($tour_id, $newtour_name, $newtour_price, $newtour_info, $newtour_picture);

    if($update_tour){
      move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
    }else{
      echo "Error";   
    }
}

  
?>
