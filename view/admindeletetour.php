
<?php

include '../action/tourAction.php';

$tour_id = $_GET['tour_id'];

$tour->deleteTour($tour_id);

?>