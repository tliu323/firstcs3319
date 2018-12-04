<?php
$query = "SELECT * FROM customer";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Who are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customer" value="';
        echo $row["customerID"];
        echo '">' . $row["customerID"] . " " . $row["fName"] . " " . $row["lName"] . " " . $row["city"] . " " . $row["phoneNumber"] . "<br>";
   }
   mysqli_free_result($result);
?>
