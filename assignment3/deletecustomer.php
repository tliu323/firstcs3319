<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventory - customer deleted</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<ol>
<?php
   $whichOwner= $_POST["customer"];
   $query = 'DELETE FROM customer WHERE customerID="' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    echo "customer has been deleted";
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
