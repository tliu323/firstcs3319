<?php
$query = 'SELECT * FROM product WHERE product.productID NOT IN (SELECT purchase.productID FROM purchase)';
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["description"];
}
mysqli_free_result($result);
echo "</ol>";
?>
