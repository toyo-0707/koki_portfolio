<?php
   require_once 'Database.php';

   class Reservation extends Database{
     public function createReservation($reservation_day, $reservation_name, $reservation_email, $reservation_phone, $reservation_address, $reservation_rental, $tour_id, $user_id){
       $sql = "INSERT INTO reservations(reservation_day, reservation_name, reservation_email, reservation_phone, reservation_address, reservation_rental, tour_id, user_id) VALUES ('$reservation_day', '$reservation_name', '$reservation_email', '$reservation_phone', '$reservation_address', '$reservation_rental', '$tour_id' ,'$user_id')";

       $result = $this->conn->query($sql);

       if($result){
         $sql2 = "SELECT tour_id,reservation_id FROM reservations WHERE reservation_day = '$reservation_day' AND reservation_name = '$reservation_name' AND reservation_email = '$reservation_email' AND reservation_phone = '$reservation_phone' AND reservation_address = '$reservation_address' AND reservation_rental = '$reservation_rental'";
        // echo $sql2;
         $result = $this->conn->query($sql2);

         if($result->num_rows == 1){
           while($tour = $result->fetch_assoc()){
             $tourID = $tour['tour_id'];
             $reservationID = $tour['reservation_id'];
           }

           header("Location: ../view/tourComplete.php?tour_id=$tourID&reservation_id=$reservationID");
         }else{
           echo "Error In Selecting: ".$this->conn->error;
         }
       }else{
        echo "Error In Selecting: ".$this->conn->error;
      }
     }
     public function getReservations(){
      $sql = "SELECT *FROM reservations INNER JOIN tours ON tours.tour_id = reservations.tour_id";
      $result = $this->conn->query($sql);

      $rows = array();

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $rows[] = $row;
        }
        return $rows;
      }
    }  
    function getMyReservations($user_id){  // for mytour.php
      $sql = "SELECT * FROM reservations INNER JOIN tours ON tours.tour_id = reservations.tour_id WHERE `user_id` = '$user_id'";
    
      $result = $this->conn->query($sql);

      $rows = array();

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $rows[] = $row;
        }
        return $rows;
      }else{
        return false;
      }
    }

     public function getReservationDetails($reservation_id){
      $sql = "SELECT * FROM reservations WHERE reservation_id = '$reservation_id'";

      // echo $sql;
      $result = $this->conn->query($sql);

      if($result->num_rows > 0){
        return $result->fetch_assoc();
      }else{
        return false;
      }
    } 

    public function deleteReservation($reservation_id){
      $sql = "DELETE FROM reservations WHERE reservation_id = '$reservation_id'";
      $result = $this->conn->query($sql);
      
      if($result == false){
        die("Cannot Delete: ".$this->conn->error);
      }else{
        header("Location: ../view/mytour.php");
      }
    }

    
    }