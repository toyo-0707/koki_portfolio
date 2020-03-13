<?php
  require_once '../class/Tour.php';
  $tour = new Tour();


  if(isset($_POST['addtour'])){
    $tour_name = $_POST['tour_name'];
    $tour_price =$_POST['tour_price'];
    $tour_info =$_POST['tour_info'];

    $tour->createTour($tour_name, $tour_price, $tour_info);
    header("Location: ../view/adminhome.php");
  }

  if(isset($_POST['upload'])){
    $picture = $_FILES['pic']['name'];

    $target_dir = "upload/"; //folder in your computer where you will place the picture
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);

    $ans = $tour->insertToTable($picture);

    if($ans == 1){
        // Upload file
        move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
        //move_uploaded_file ~~~ transfers the picture from one location
        // to another location
        header("Location: ../view/adminaddtour.php");
    }else{
        echo "Error";
    }
    
}

  
?>
