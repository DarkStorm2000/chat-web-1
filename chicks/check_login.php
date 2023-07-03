<?php

require_once('../db.php');


if (isset($_POST['username']) && isset($_POST['password'])) { 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'"; 
    $result = mysqli_query($conn, $sql); 

    if (mysqli_num_rows($result) > 0) { 
        header("Location: ../index.php");
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Missing data.";
}








$conn->close(); 




$cookie_name = "user";
$cookie_value = $username; 
$expiry_time = time() + (86400 * 3); 
            
setcookie($cookie_name, $cookie_value, $expiry_time, "/"); 
            
echo "1";
?>