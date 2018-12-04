<?php
   $query = "SELECT * FROM product";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="products" value="';
        echo $row["productID"];
        echo '">' . $row["productID"] . " " . $row["description"] . "<br>";
   }
   mysqli_free_result($result);
?>
