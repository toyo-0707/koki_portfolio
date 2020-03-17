<?php
   require_once 'Database.php';

   class Tour extends Database{
     public function createTour($tour_name, $tour_price, $tour_info, $picture){
       $sql = "INSERT INTO tours(tour_name, tour_price, tour_info, tour_picture) VALUES ('$tour_name', '$tour_price', '$tour_info', '$picture')";
      // echo $sql;
       $result = $this->conn->query($sql);
       header("Location: ../view/adminhome.php");
       if($result == false){
         die("CANNOT ADD TOURS: ".$this->conn->error);
       }else{
         return 1;
       }
     }

     public function getTours(){
      $sql = "SELECT *FROM tours";
      $result = $this->conn->query($sql);

      $rows = array();

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $rows[] = $row;
        }
        return $rows;
      }
    } 
    public function getSpecificTour($tour_id){
      $sql = "SELECT * FROM tours WHERE tour_id = '$tour_id'";

      $result = $this->conn->query($sql);
      if($result == false){
        die("No record founf: ".$this->conn->error);
      }else{
        return $result->fetch_assoc();
      }
    }
    public function insertToTable($picture){
      $sql= "UPDATE tours SET tour_picture = '$picture' WHERE tour_id = '2'";

      if($this->conn->query($sql)){
          //successful in inserting the picture
          return 1;
      }else{
          echo "Not saved " .$this->conn->error;
          return 0;
      }
  }
  public function showAllImages(){
    $sql = "SELECT tour_picture FROM tours";

    $rows = array();

    $result = $this->conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }

        return $rows;
    }
}

public function searchSpecificImage($tour_id){
    $sql = "SELECT tour_picture FROM tours WHERE tour_id = '$tour_id'";
    $result = $this->conn->query($sql);

    $row = $result->fetch_assoc();

    return $row;
}
public function editTour($tour_id, $newtour_name, $newtour_price, $newtour_info, $newtour_picture){
  $sql = "UPDATE tours
          SET tour_name = '$newtour_name',
              tour_price = '$newtour_price',
              tour_info = '$newtour_info',
              tour_picture = '$newtour_picture'

          WHERE tour_id = '$tour_id';    
  ";
  // echo $sql;
  $result = $this->conn->query($sql);
  if($result == false){
    die("Cannot Update: ".$this->conn->error);
  }else{
    header("Location: ../view/adminhome.php");
  }
}
public function deleteTour($tour_id){
  $sql = "DELETE FROM tours WHERE tour_id = '$tour_id'";
  $result = $this->conn->query($sql);
  
  if($result == false){
    die("Cannot Delete: ".$this->conn->error);
  }else{
    header("Location: ../view/adminhome.php");
  }
}


    }