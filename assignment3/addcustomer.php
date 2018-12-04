<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Inventory - new customers</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $fname= $_POST["fname"];
   $lname = $_POST["lname"];
   $city =$_POST["city"];
   $number =$_POST["number"];
   $query1= 'select max(customerID) as maxid from customer';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $customerid = (string)$newkey;
   $query = 'INSERT INTO customer values("' . $customerid . '","' . $fname . '","' . $lname . '","' . $city . '","' . $number . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "New customer was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
