<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventory - your purchase</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your purchases</h1>
<ol>
<?php
   $whichOwner= $_POST["purchase"];
   $customerID = $_POST["customerid"];
   $purchaseID =$_POST["purchaseid"];
   $quantity = $_POST["quantity"];
   $query1= 'select max(customerID) as maxid from purchase';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $petid = (string)$newkey;
   $query = 'INSERT INTO purchase values("' . $customerID . '","' . $purchaseID . '","' . $quantity . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your purchase was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
