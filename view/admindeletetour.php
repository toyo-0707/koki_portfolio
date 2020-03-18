
<?php

include '../action/reservationAction.php';

$tour_id = $_GET['reservation_id'];


$tour->deleteReservation($reservation_id);

?>