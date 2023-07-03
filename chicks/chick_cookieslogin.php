<?php
if (!isset($_COOKIE['user']) || $_COOKIE['user'] != 'Name') {
    header('Location: login/login.php'); 
    exit; 
}
?>