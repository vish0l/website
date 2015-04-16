<?php
$conn = mysqli_connect("localhost", "pse", "pse", "product_data");
if($_POST['url']!=""&&$_POST['email']!="")
{
	$url=$_POST['url'];
	$email=$_POST['email'];
    $sql = "INSERT INTO priceupdate (`url`, `email`) VALUES ('".$url."', '".$email."')";
    if (mysqli_query($conn, $sql)) {
    echo "We will send you update on price drop thanks ;)";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SimplyShop.Co.in - Get Instant Price Update Direct In Your MailBox ;)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Add Your Product Url And Your Email Address</h2>
  <form role="form" action="" method="post">
    <div class="form-group">
      <label for="url">URL:</label>
      <input type="url" class="form-control" id="url" placeholder="Enter Product Url" name="url">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Your Email Id" name="email">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>