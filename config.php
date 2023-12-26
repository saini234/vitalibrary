<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "lms";
// $conn = new mysqli($servername, $username, $password, $dbname);
$conn = new PDO("mysql:host=localhost;port=3307;dbname=libsystem", "root", "");

session_start();
define("siteurl","https://localhost/m/");

?>