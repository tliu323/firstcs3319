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
$quantity =$_POST[quantity];
$query = 'SELECT * FROM boughtproduct WHERE boughtproduct.quantity>"' . $quantity . '"';
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["fName"] . " " . $row["lName"] . " " . $row["description"] . " " . $row["quantity"];
}
mysqli_free_result($result);
?>
</o1>
<?php
     mysqli_close($connection);
?>
</body>
</html>
