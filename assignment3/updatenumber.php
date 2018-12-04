<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventory - Customer Phone number</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<ol>
<?php
   $customerid= $_POST["customerid"];
   $newnumber= $_POST["newnumber"];
   $query1 = 'UPDATE customer SET phoneNumber="' . $newnumber . '" WHERE customerID= "' . $customerid .'"';
	$result=mysqli_query($connection,$query1);
	if (!$result) {
          die("database max query failed.");
	}
	echo "phone number has been updated";
mysqli_close($connection);
?>
</ol>
</body>
</html>
