<?php
//Connect to db
require('/home/jonlaygo/db.php');


$sql = "SELECT * FROM gym1 ";
$result = mysqli_query($cnxn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>";
        echo $row['first']." ".$row['last'].", (".$row['gender'].") ".$row['age']." ";
        echo "<br>";
        echo $row['city']. ", ". $row['state']." [";
        echo $row['comment']."] ";
        echo "</p>";
    }
} else {
    echo "No one has checked in";
}
?>
