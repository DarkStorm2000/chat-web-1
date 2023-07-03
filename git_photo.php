<?php
require_once('db.php');


?>



<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, image FROM my_table";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_errno($conn) == 0) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $username = $row['name'];
            $image = $row['image'];
        
            echo "<div style='display:flex; align-items:center'>";
            echo "<h2 style='font-weight: bold; margin-right: 10px;'>$username :</h2>";
            echo "<img src='data:image/jpeg;base64,".base64_encode($image)."' alt='Image' style='width: 100px; height: 100px;' />";
            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "No messages yet.";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn);
}

$conn->close();
?>