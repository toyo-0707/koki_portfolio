<?php
   require_once 'Database.php';

   class Tour extends Database{
     public function createTour($tour_name, $tour_price){
       $sql = "INSERT INTO tours(tour_name, tour_price) VALUES ('$tour_name', '$tour_price')";

       $result = $this->conn->query($sql);

       if($result == false){
         die("CANNOT ADD USERS: ".$this->conn->error);
       }else{
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

    }