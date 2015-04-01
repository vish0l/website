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
<html>
<head>
<title>
PriceUpdate:: Get price Drop alert in your mail box
</title>
</head>
<body>
<table>
<form action="" method="post">
<tr>
<td>
URL
</td>
<td>
:
</td>
<td>
<input type="text" name="url">
</td>
</tr>
<tr>
<td>
Email Id
</td>
<td>
:
</td>
<td>
<input type="text" name="email">
</td>
</tr>
<tr>
<td>
<input type="submit" value="Submit">
</td>
</tr>
</form>
</table>
</body>
</html>