<?php
$XVWA_WEBROOT = "";
$host = "localhost:3306";
$dbname = 'xvwa';
$user = "test";
$pass = "Test@123";
$conn = new mysqli($host,$user,$pass,$dbname);
$conn1 = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
