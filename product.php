<?php
error_reporting(1);
ini_set('display_errors', 'On');

$conn = mysqli_connect("localhost", "pse", "pse", "product_data");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name=$_GET['name'];

$fsql = "SELECT * FROM flipkart_mobile where product_name like '%".$name."%'";
$ssql = "SELECT * FROM snapdeal_mobile where product_name like '%".$name."%'";
$asql = "SELECT * FROM amazon_mobile where product_name like '%".$name."%'";

$fresult = mysqli_query($conn, $fsql);
$sresult = mysqli_query($conn, $ssql);
$aresult = mysqli_query($conn, $asql);
$fresult=mysqli_fetch_assoc($fresult);
$sresult=mysqli_fetch_assoc($sresult);
$aresult=mysqli_fetch_assoc($aresult);

echo "<table border='1'>";
echo "<tr><td>Product Name</td><td>product price</td><td>product link</td></tr><br>";
echo "<tr><td>".$fresult[product_name]." ".$fresult[product_tag]."</td><td>".$fresult[product_price]."</td><td><a href='".$fresult[product_url]."' target='_blank'>Flipkart.com</a></td></tr><br>";
echo "<tr><td>".$sresult[product_name]."</td><td>Rs. ".substr($sresult[product_price],0,-5)."</td><td><a href='".$sresult[product_url]."' target='_blank'>Snapdeal.com</a></td></tr><br>";
echo "<tr><td>".$aresult[product_name]."</td><td>Rs. ".$aresult[product_price]."</td><td><a href='".$aresult[product_url]."' target='_blank'>Amazon.in</a></td></tr><br>";
echo "</table>";
echo $fresult[product_specs];
?>