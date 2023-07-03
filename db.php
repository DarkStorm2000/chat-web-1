<?php

$servername = "localhost"; // اسم الخادم (مضيف MySQL)
$username = "root"; // اسم المستخدم لقاعدة البيانات
$password = ""; // كلمة المرور لقاعدة البيانات
$dbname = "chat1"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if (!$conn) {
    die("Connection failed");
}







?>