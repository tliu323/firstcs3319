<?php
	$query = 'SELECT * FROM customer;
	$result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query1 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row[phoneNumber]. "</li>";
    }
    mysqli_free_result($result);
?>
