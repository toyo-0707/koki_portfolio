
<?php

include '../action/reservationAction.php';

$reservation_id = $_GET['reservation_id'];


$reservation->deletereservation($reservation_id);

?>