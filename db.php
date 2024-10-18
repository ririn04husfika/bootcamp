<?php
$con = mysqli_connect("localhost", "root", "", "hotel", 3306); // Pastikan port benar

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>