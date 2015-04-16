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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body>
<div class="container">
  <h2><?php echo $fresult[product_name]." ".$fresult[product_tag]; ?></h2>
  <p>Online Price Of <?php echo $fresult[product_name]." ".$fresult[product_tag]; ?>:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product URL</th>
      </tr>
    </thead>
    <tbody>
<tr><td><?php echo $fresult[product_name]." ".$fresult[product_tag]; ?></td><td><?php echo $fresult[product_price]; ?> </td><td><a href="<?php echo $fresult[product_url]; ?>" target='_blank'>Flipkart.com</a></td></tr>
<tr><td><?php echo $sresult[product_name]; ?></td><td>Rs. <?php echo substr($sresult[product_price],0,-5); ?></td><td><a href="<?php echo $sresult[product_url]; ?>" target='_blank'>Snapdeal.com</a></td></tr>
<tr><td><?php echo $aresult[product_name]; ?></td><td>Rs. <?php echo $aresult[product_price]; ?></td><td><a href="<?php echo $aresult[product_url]; ?>" target='_blank'>Amazon.in</a></td></tr>
</tbody></table></div>
<?php echo $fresult[product_specs]; ?>
</body>
</html>
