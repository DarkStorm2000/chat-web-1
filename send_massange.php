<?php
require_once('db.php');




$query = "INSERT into `event`(`id`, `name`, `massage`) VALUES ('$venue', '$date','$time')";  


mysqli_query($dbconn, $query);



?>


