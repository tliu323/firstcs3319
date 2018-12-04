<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventory - sale of a product</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<ol>
<?php
   $whichproduct= $_POST["products"];
   $query = 'SELECT SUM(boughtproduct.quantity) AS "X" FROM boughtproduct, product WHERE product.description=boughtproduct.description AND product.productID="' . $whichproduct . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query1 failed.");
     }
   while ($row = mysqli_fetch_assoc($result)) {
	echo "<li>";
	echo $row["X"] . " of Product " . $whichproduct . " has been sold in total. <br>" ;
        }
	mysqli_free_result($result);
	echo "</ol>";
   
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
