
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventory - products bought by customers</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are products:</h1>
<ol>
<?php
   $whichOwner= $_POST["customer"];
   $query = 'SELECT * FROM customer, boughtproduct WHERE customer.lName=boughtproduct.lName AND customer.customerID="' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
