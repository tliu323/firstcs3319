
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the inventory</h1>
<h2>Our Customers</h2>
<form action="getcustomers.php" method="post">
<?php
   include 'getdata.php';
?>
<input type="submit" value="Get Products">
</form>
<h3> Get Products </h3>
<?php
   include 'getproducts.php';
?>
<p>
<hr>
<p>
<h2> ADD A NEW PURCHASE:</h2>
<form action="addnewpurchase.php" method="post">
Customer ID:: <input type="text" name="customerid"><br>
Purchased Product ID: <input type="text" name="purchaseid"><br>
Quantity purchased: <input type="text" name="quantity"><br>
<input type="submit" value="Add New Purchase">
</form>
<p>
<hr>
<p>
<h2> ADD A NEW CUSTOMER:</h2>
<form action="addcustomer.php" method="post">
New Customer's First Name: <input type="text" name="fname"><br>
New Customer's Last Name: <input type="text" name="lname"><br>
New Customer's city: <input type="text" name="city"><br>
New Customer's phone number: <input type="text" name="number"><br>
<input type="submit" value="Add New Customer">
</form>
<p>
<hr>
<p>
<h2> UPDATE CUSTOMER NUMBER:</h2>
<form action="updatenumber.php" method="post">
Customer ID: <input type="text" name="customerid"><br>
Customer's new number: <input type="text" name="newnumber"><br>
<input type="submit" value="Change Number">
</form>
<p>
<hr>
<p>
<h2> DELETE CUSTOMER:</h2>
<form action="deletecustomer.php" method="post">
<?php
   include 'getdata.php';
?>
<input type="submit" value="Delete Customer">
</form>
<p>
<hr>
<p>
<h2> DISPLAY QUANTITY:</h2>
<form action="getquantity.php" method="post">
Quantity: <input type="text" name="quantity"><br>
<input type="submit" value="Display">
</form>
<p>
<hr>
<p>
<h2> PRODUCST THAT HAVE NOT BEEN SOLD</h2>
<?php
	include "notsold.php"
?>
<p>
<hr>
<p>
<h2> SALE STATS OF PRODUCT:</h2>
<form action="salestat.php" method="post">
<?php
     include 'products.php';
?>
<input type="submit" value="Get Product">
</form> 
<?php
mysqli_close($connection);
?> 
</body>
</html>
