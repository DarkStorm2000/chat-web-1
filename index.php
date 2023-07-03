<!DOCTYPE html>
<html lang="en">
<?php
require_once('db.php');
//require_once('send_massange.php');
//require_once('../chicks/chick_cookieslogin.php')

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat With Dark Storm Team</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="https://k.top4top.io/p_273576f1h1.png">
</head>

<body>
    <div class="chat-box" id="myDiv">
        <div class="chat-header">
            <h3>Dark Storm Chat</h3>
        </div>
        <div class="chat-body">
            <?php

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT name, massage FROM massages ";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_errno($conn) == 0) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $username = $row['name'];
                        $message = $row['massage'];

                        echo "<div style='display:flex; align-items:center'>";
                        echo "<h2 style='font-weight: bold; margin-right: 10px;'>$username :</h2>";
                        echo "<p style='margin: 0;'>$message</p>";
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
        </div>
        <div class="chat-footer" style="justify-items: end;">
            <input type="text" name="name" id="username" placeholder="Enter Your Name ...." style="width: 0px;">
            <input type="text" placeholder="Type a message..." name="message">
            <button>Send</button>
        </div>
    </div>
</body>

</html>