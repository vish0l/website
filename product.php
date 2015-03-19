<?php
error_reporting(1);
ini_set('display_errors', 'On');

$conn = mysqli_connect("localhost", "root", "Newhackold57", "product_data");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name=$_GET['name'];
