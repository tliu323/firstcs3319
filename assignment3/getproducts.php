<?php
$query = "SELECT * FROM product ORDER BY description";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["productID"] . " " . $row["description"] . " " . $row["cost"] . " " . $row[quantity] .  "</li>";
}
mysqli_free_result($result);
echo "</ol>";
?>
