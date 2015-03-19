<?php
error_reporting(1);
ini_set('display_errors', 'On');

$conn = mysqli_connect("localhost", "pse", "pse", "product_data");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name=$_POST['name'];
$sql = "SELECT * FROM flipkart_mobile where product_name like '%".$name."%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td><a href='/website/product.php?name=".$row[product_name]."'>".$row[product_name]." ".$row[product_tag]."</a></td></tr><br>";
    }
} else {
    echo "Not found contact us vishal@vounyse.com";
}

mysqli_close($conn);
?>